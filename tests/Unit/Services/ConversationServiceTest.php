<?php

namespace Tests\Unit\Services;

use Carbon\Carbon;
use Tests\TestCase;
use App\Models\Contact\Contact;
use App\Models\Account\Account;
use App\Models\Contact\Conversation;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use App\Services\Contact\ConversationService;

class ConversationServiceTest extends TestCase
{
    use DatabaseTransactions;

    protected $jsonStructureConversation = [
        'id',
        'object',
        'happened_at',
        'account' => [
            'id',
        ],
        'contact' => [
            'id',
        ],
        'created_at',
        'updated_at',
    ];

    public function test_it_stores_a_conversation()
    {
        $contact = factory(Contact::class)->create([]);

        $request = [
            'happened_at' => Carbon::now(),
        ];

        $conversationService = new ConversationService;
        $response = $conversationService->create($request, $contact);

        $this->assertDatabaseHas('conversations', [
            'contact_id' => $contact->id,
            'account_id' => $contact->account->id,
        ]);

        $response->assertJsonStructure([
            '*' => $this->jsonStructureConversation,
        ]);
    }
}