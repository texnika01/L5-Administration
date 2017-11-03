<h5>From: {{ $message->user->name }}
    <span class="mailbox-read-time pull-right">
       Posted {{ $message->created_at->diffForHumans() }}
    </span>
</h5>
<div class="mailbox-read-message">
   {{ $message->body }}
</div>