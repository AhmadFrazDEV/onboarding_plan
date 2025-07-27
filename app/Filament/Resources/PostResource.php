<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PostResource\Pages;
use App\Filament\Resources\PostResource\RelationManagers;
use App\Models\Post;
use Filament\Actions\Modal\Actions\Action;
use Filament\Tables\Actions\ActionGroup;
use Filament\Forms;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Filament\Tables\Columns\ToggleColumn;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Actions;
use Filament\Tables\Actions\BulkActionGroup;
use Filament\Tables\Columns\ImageColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\PostResource\RelationManagers\CommentsRelationManager;

class PostResource extends Resource
{
    protected static ?string $model = Post::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Grid::make(2)
                    ->schema([
                        TextInput::make('title')
                            ->required()
                            ->maxLength(255)
                            ->label('Post Title'),
                        TextInput::make('body')
                            ->required()
                            ->maxLength(1000)
                            ->label('Post Body'),
                    ]),
                Grid::make(1)
                    ->schema([
                        RichEditor::make('summary')
                            ->required()
                            ->label('Post Content')
                            ->toolbarButtons([
                                'bold',
                                'italic',
                                'link',
                                'bulletList',
                                'numberedList',
                                'blockquote',
                                'codeBlock',
                                'undo',
                                'redo',
                            ])->maxLength(5000),
                            ]),
                Grid::make(2)
                    ->schema([
                        DatePicker::make('published_at')
                            ->label('Publish Date')
                            ->required()
                            ->default(now())
                            ->minDate(now()),
                        Toggle::make('is_published')
                            ->label('Published')
                            ->default(false)
                            ->inline(false)
                            ->reactive()
                            ->helperText('Toggle to publish or unpublish the post')
                    ]),
                FileUpload::make('image')
                    ->label('Post Image')
                    ->image()
                    ->disk('public')
                    ->directory('posts/images')
                    ->visibility('public')
                    ->maxSize(1024) // 1MB
                    ->acceptedFileTypes(['image/*'])
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id')
                    ->sortable()
                    ->searchable()
                    ->label('ID'),
                TextColumn::make('title')
                    ->sortable()
                    ->searchable()
                    ->label('Title'),
                TextColumn::make('body')
                    ->limit(50)
                    ->label('Body'),
                IconColumn::make('is_published')
                    ->icon(fn($state) => $state ? 'heroicon-o-check-circle' : 'heroicon-o-x-circle')
                    ->toggleable()
                    ->label('Status'),
                TextColumn::make('published_at')
                    ->dateTime()
                    ->label('Published At'),
                ImageColumn::make('image')
                    ->label('Image')
                    ->circular()
                    
            ])
            ->filters([
                //
            ])
            ->actions([
                ActionGroup::make([
                    Actions\ViewAction::make(),
                    Actions\EditAction::make(),
                    Actions\DeleteAction::make(),
                ])->icon('heroicon-o-pencil-square'),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            CommentsRelationManager::class,
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPosts::route('/'),
            'create' => Pages\CreatePost::route('/create'),
            'view' => Pages\ViewPost::route('/{record}'),
            'edit' => Pages\EditPost::route('/{record}/edit'),
        ];
    }
}

