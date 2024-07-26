<?php

namespace App\Rules;

use App\Models\Table\InventoryTable;
use Illuminate\Contracts\Validation\Rule;

class ValidQuantity implements Rule
{
    public $id;
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct($id)
    {
        $this->id = $id;
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        $inventory = InventoryTable::find($this->id);
        return $inventory ? $value <= $inventory->quantity : false;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'The quantity must not exceed the available stock.';
    }
}
