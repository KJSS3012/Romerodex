<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class RomemormonAlterado extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public $oldromeromon;
    public $newromeromon;
    public function __construct($oldromeromon,$newromeromon)
    {
        $this->oldromeromon = $oldromeromon;
        $this->newromeromon = $newromeromon;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
                    ->line('Um Romeromon foi modificado')
                    ->line('Nome: '.$this->oldromeromon->rom_name.' se torna '.$this->newromeromon->rom_name)
                    ->line('Descrição: '.$this->oldromeromon->rom_description.' se torna '.$this->newromeromon->rom_description);
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
