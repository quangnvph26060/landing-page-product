<?php

namespace App\Jobs;

use App\Services\SheetDBService;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class SendContactToGoogleSheet implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $contact;

    public function __construct(object $contact)
    {
        $this->contact = $contact;
    }

    public function handle(SheetDBService $sheet)
    {
        $sheet->append([
            'Họ tên'        => $this->contact->fullname,
            'Số điện thoại' => "'" . $this->contact->phone,
            'Địa chỉ'       => $this->contact->address,
            'Ghi chú'       => $this->contact->notes ?? '',
            'Thời gian tạo' => $this->contact->created_at->format('d-m-Y'),
        ]);
    }
}
