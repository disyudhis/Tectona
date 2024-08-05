<?php

namespace App\Http\Livewire\Components\Notification;

use App\Services\Notification\NotificationService;
use App\Services\User\UserService;
use Livewire\Component;
use App\Models\Entity\User;
use Illuminate\Support\Facades\Auth;

class NotificationDropdown extends Component
{
    public $notifications;

    public function mount(UserService $user_service) {
        $user_id = auth()->user()->id;
        $user = $user_service->getById($user_id);
        $this->notifications = $user->unreadNotifications;
    }
    public function render()
    {
        return view('livewire.components.notification.notification-dropdown');
    }

    public function markAsRead(UserService $user_service){
        $user_id = auth()->user()->id;
        $user = $user_service->getById($user_id);

        $user->unreadNotifications->markAsRead();
        $this->dispatchBrowserEvent('refreshPage');
    }
}
