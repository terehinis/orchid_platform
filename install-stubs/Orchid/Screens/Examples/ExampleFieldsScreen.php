<?php

namespace App\Orchid\Screens\Examples;

use Orchid\Screen\Action;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Fields\CheckBox;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Label;
use Orchid\Screen\Fields\Password;
use Orchid\Screen\Fields\Radio;
use Orchid\Screen\Fields\Select;
use Orchid\Screen\Fields\TextArea;
use Orchid\Screen\Layout;
use Orchid\Screen\Screen;
use Orchid\Support\Color;

class ExampleFieldsScreen extends Screen
{
    /**
     * Display header name.
     *
     * @var string
     */
    public $name = 'Basic form controls';

    /**
     * Display header description.
     *
     * @var string
     */
    public $description = 'Examples for creating a wide variety of forms.';

    /**
     * Query data.
     *
     * @return array
     */
    public function query(): array
    {
        return [
            'name'  => 'Hello! We collected all the fields in one place',
        ];
    }

    /**
     * Button commands.
     *
     * @return Action[]
     */
    public function commandBar(): array
    {
        return [];
    }

    /**
     * Views.
     *
     * @throws \Throwable
     *
     * @return array
     */
    public function layout(): array
    {
        return [

            Layout::columns([
                Layout::rows([

                    Input::make('name')
                        ->title('Full Name:')
                        ->placeholder('Enter full name')
                        ->required()
                        ->help('Please enter your full name'),

                    Input::make('email')
                        ->title('Email address')
                        ->placeholder('Email address')
                        ->help("We'll never share your email with anyone else.")
                        ->popover('Tooltip - hint that user opens himself.'),

                    Password::make('password')
                        ->title('Password')
                        ->placeholder('Password'),

                    Label::make('static')
                        ->title('Static:')
                        ->value('email@example.com'),

                    Select::make('select')
                        ->title('Select')
                        ->options([1, 2]),

                    CheckBox::make('checkbox')
                        ->title('Checkbox')
                        ->placeholder('Remember me'),

                    Radio::make('radio')
                        ->placeholder('Yes')
                        ->value(1)
                        ->title('Radio'),

                    Radio::make('radio')
                        ->placeholder('No')
                        ->value(0),

                    TextArea::make('textarea')
                        ->title('Example textarea')
                        ->rows(6),

                ])->title('Base Controls'),
                Layout::rows([
                    Input::make('disabled_input')
                        ->title('Disabled Input')
                        ->placeholder('Disabled Input')
                        ->help('A disabled input element is unusable and un-clickable.')
                        ->disabled(),

                    Select::make('disabled_select')
                        ->title('Disabled select')
                        ->options([1, 2])
                        ->value(0)
                        ->disabled(),

                    TextArea::make('disabled_textarea')
                        ->title('Disabled textarea')
                        ->placeholder('Disabled textarea')
                        ->rows(6)
                        ->disabled(),

                    Input::make('readonly_input')
                        ->title('Readonly Input')
                        ->placeholder('Readonly Input')
                        ->readonly(),

                    CheckBox::make('readonly_checkbox')
                        ->title('Readonly Checkbox')
                        ->placeholder('Remember me')
                        ->disabled(),

                    Radio::make('radio')
                        ->placeholder('Yes')
                        ->value(1)
                        ->title('Radio')
                        ->disabled(),

                    Radio::make('radio')
                        ->placeholder('No')
                        ->value(0)
                        ->disabled(),

                    TextArea::make('readonly_textarea')
                        ->title('Readonlyd textarea')
                        ->placeholder('Readonlyd textarea')
                        ->rows(6)
                        ->disabled(),

                ])->title('Input States'),
            ]),

            Layout::rows([
                Input::make('test')
                    ->title('Text')
                    ->value('Artisanal kale')
                    ->help('Elements of type text create basic single-line text fields.')
                    ->horizontal(),

                Input::make('search')
                    ->type('search')
                    ->title('Search')
                    ->value('How do I shoot web')
                    ->help('Elements of type search are text fields designed for the user to enter search queries into.')
                    ->horizontal(),

                Input::make('email')
                    ->type('email')
                    ->title('Email')
                    ->value('bootstrap@example.com')
                    ->help('Elements of type email are used to let the user enter and edit an e-mail address')
                    ->horizontal(),

                Input::make('url')
                    ->type('url')
                    ->title('Url')
                    ->value('https://getbootstrap.com')
                    ->horizontal(),

                Input::make('tel')
                    ->type('tel')
                    ->title('Telephone')
                    ->value('1-(555)-555-5555')
                    ->horizontal(),

                Input::make('password')
                    ->type('password')
                    ->title('Password')
                    ->value('Password')
                    ->horizontal(),

                Input::make('number')
                    ->type('number')
                    ->title('Number')
                    ->value(42)
                    ->horizontal(),

                Input::make('date_and_time')
                    ->type('datetime-local')
                    ->title('Date and time')
                    ->value('2011-08-19T13:45:00')
                    ->horizontal(),

                Input::make('date')
                    ->type('date')
                    ->title('Date')
                    ->value('2011-08-19')
                    ->horizontal(),

                Input::make('month')
                    ->type('month')
                    ->title('Month')
                    ->value('2011-08')
                    ->horizontal(),

                Input::make('week')
                    ->type('week')
                    ->title('Week')
                    ->value('2011-W33')
                    ->horizontal(),

                Input::make('Time')
                    ->type('time')
                    ->title('Time')
                    ->value('13:45:00')
                    ->horizontal(),

                Input::make('color')
                    ->type('color')
                    ->title('Color')
                    ->value('#563d7c')
                    ->horizontal(),

                Button::make('Submit')->type(Color::DEFAULT()),

            ])->title('Textual HTML5 Inputs'),
        ];
    }
}
