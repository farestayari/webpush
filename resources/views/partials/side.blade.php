<div class="col-4">
        <div class="list-group" id="list-tab" role="tablist">
            <a class="list-group-item list-group-item-action active" id="list-home-list"  href="{{ route('showHistory') }}" role="tab" >Historique des messages</a>
            <a class="list-group-item list-group-item-action" id="list-profile-list"  href="{{ route('showManager') }}" role="tab" >envoyer une notification à tous</a>
            <a class="list-group-item list-group-item-action" id="list-messages-list"  href="{{ route('sendUnicastNotification') }}" role="tab" aria-controls="messages">envoyer une notification au flux</a>
            <a class="list-group-item list-group-item-action" id="list-settings-list"  href="#list-settings" role="tab" aria-controls="settings">Paramètres</a>
        </div>
</div>