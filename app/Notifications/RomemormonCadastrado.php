<?php

namespace App\Notifications;

use App\Models\Romeromon;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class RomemormonCadastrado extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public $romeromon;
    public $romeroball;
    public function __construct($romeromon, $romeroball)
    {
        $this->romeromon = $romeromon;
        $this->romeroball = $romeroball;
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
            ->line('Um Romeromon foi cadastrado')
            ->line('Nome: ' . $this->romeromon->rom_name)
            ->line('Descrição: ' . $this->romeromon->rom_description)
            ->line('Romeroball: ' . $this->romeroball->bal_romeroball);
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
