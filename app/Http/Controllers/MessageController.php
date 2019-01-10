<?php

namespace App\Http\Controllers;

use App\Message;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MessageController extends Controller
{
    /* @var User */
    protected $me;

    public function __construct()
    {
        $this->me = Auth::user();
    }

    /**
     * Display the history of the last 10 messages between
     * the provided friend and the logged user.
     *
     * @return \Illuminate\Http\Response
     */
    public function history(User $friend)
    {
        $messages = Message::where('user_id', $this->me->id)
            ->where('recipient_user_id', $friend->id)
            ->orWhere('user_id', $friend->id)
            ->where('recipient_user_id', $this->me->id)
            ->limit(10)
            ->get();

        return response()->json($messages);
    }

    public function send(Request $request, User $friend)
    {
        $this->validate($request, [
            'content' => 'string|required'
        ]);

        $message = $this->me->sentMessages()->create([
            'recipient_user_id' => $friend->id,
            'content' => $request->get('content')
        ]);

        return response()->json([
            'message' => 'Message sent!',
            'model' => $message
        ]);
    }
}
