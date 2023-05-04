<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProductResource\Pages;
use App\Filament\Resources\ProductResource\RelationManagers;
use App\Models\Category;
use App\Models\Product;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\FileUpload;
use Filament\Tables\Filters\Filter;

class ProductResource extends Resource
{
    protected static ?string $model = Product::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('category_id')->label('Category')->columnSpan(1)
                    ->options(Category::query()->where('status', '=', 1)->pluck('category_name', 'id')->toArray()),
                Forms\Components\TextInput::make('product_name')
                    ->required()->maxLength(255)->columnSpan(1),
                Forms\Components\Textarea::make('product_description')
                    ->required()->maxLength(255)->columnSpan(2),
                Forms\Components\Toggle::make('status')
                    ->required()->onColor('success')->offColor('danger')->columnSpan(2),
                Forms\Components\FileUpload::make('product_image')
                    ->required()->columnSpan(2),
            ])->columns(2);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('category.category_name')
                    ->label(__('message.Category Name'))
                    ->sortable()
                    ->searchable()
                    ->toggleable(),
                Tables\Columns\TextColumn::make('product_name')
                    ->sortable()
                    ->searchable()
                    ->toggleable(),
                // Tables\Columns\TextColumn::make('product_description'),
                Tables\Columns\TextColumn::make('product_image'),
                Tables\Columns\ImageColumn::make('product_image')
                    ->extraImgAttributes(['alt' => 'product_image']),
                Tables\Columns\IconColumn::make('status')
                    ->boolean(),
                // Tables\Columns\TextColumn::make('created_at')
                //     ->dateTime(),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime(),
            ])
            ->defaultSort('created_at', 'desc')
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ManageProducts::route('/'),
        ];
    }
}
