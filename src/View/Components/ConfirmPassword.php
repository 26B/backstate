<?php

namespace TwentySixB\BackState\View\Components;

use Illuminate\View\Component;

class ConfirmPassword extends Component
{
    /**
     * Unique hash wire method to call after the password is confirmed.
     */
    public ?string $hashId;

    /**
     * Additional information to display in modal.
     */
    public string $additionalInfo;

    /**
     * Password confirmation modal's title.
     */
    public string $title;

    /**
     * Create new component instance.
     *
     * @param  string $title          Password confirmation modal's title.
     * @param  string $additionalInfo Additional information to display in modal.
     * @return void
     */
    public function __construct(?string $title = null, ?string $additionalInfo = null)
    {
        $this->hashId = null;

        if (is_null($title)) {
            $this->title = __('Confirm password');
        } else {
            $this->title = $title;
        }

        if (is_null($additionalInfo)) {
            $this->additionalInfo = __('Please confirm your password before continuing.');
        } else {
            $this->additionalInfo = $additionalInfo;
        }
    }

    /**
     * Hash and return wire method to call after confirming password.
     *
     * @param  string $methodName Method to hash.
     * @return string Hashed method name.
     */
    public function getMethodHash(string $methodName): string
    {
        if (empty($this->hashId)) {
            $this->hashId = md5($methodName);
        }

        return $this->hashId;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('backstate::components.confirm-password');
    }
}
