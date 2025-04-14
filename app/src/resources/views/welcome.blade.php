
@extends('layouts.guest')
<section class="hero is-primary is-fullheight">
    <div class="level p-5">
        <div class="level-left">
            <div class="level-item">
                <span>
                    {{config('app.name')}} v.{{ config('app.version') }}
                </span>
            </div>
        </div>
        <div class="level-right">
            <div class="level-item">
                <a href="{{ route('login') }}" class="button is-light">Login</a>
                &nbsp;
                <a href="{{ route('register') }}" class="button is-light">Register</a>
            </div>
        </div>
    </div>
    <div class="hero-body">
        <div class="container has-text-centered">
            <h1 class="title">
                Ark:SE & Ark:SA Server Configuration & Management<br/><u>Simplified</u>
            </h1>
        </div>
    </div>
</section>

<section class="section">
    <div class="container">
        <h2 class="title has-text-centered">Features</h2>
        <div class="columns">
            <div class="column">
                <div class="box">
                    <h3 class="title is-4">Dynamic Config</h3>
                    <p>
                        <strong>Dynamic Config</strong> allows you to change server settings on the fly without restarting the server.
                    </p>
                </div>
            </div>
            <div class="column">
                <div class="box">
                    <h3 class="title is-4">Live Tuning</h3>
                    <p>
                        <strong>Live Tuning</strong> lets you adjust game parameters in real-time, enhancing gameplay without downtime.
                    </p>
                </div>
            </div>
            <div class="column">
                <div class="box">
                    <h3 class="title is-4">Web Notifications</h3>
                    <p>
                        <strong>Web Notifications</strong> keep you informed about server events and updates directly in your browser.
                    </p>
                    <hr/>
                    <x-bulma-message type="info" header="Future Plans">
                        <p>
                            We plan to add support for web notifications in the future. Stay tuned!
                        </p>
                    </x-bulma-message>
                    <hr/>
                    <x-bulma-message type="warning" header="Note">
                        This feature is still in development and will be available in a future release.
                    </x-bulma-message>
                </div>
            </div>
        </div>
        <div class="columns">
            <div class="column">
                <div class="box">
                    <h3 class="title is-4">User Management</h3>
                    <p>
                        <strong>User Management</strong> Allow your players to access certain parts of the server management system.<br/>
                        This allows for assistant Administrators, and for example, a player to view their tames and structures.
                    </p>
                    <hr/>
                    <x-bulma-message type="warning" header="Note">
                        This feature is still in development and will be available in a future release.
                    </x-bulma-message>
                </div>
            </div>
            <div class="column">
                <div class="box">
                    <h3 class="title is-4">Server Management</h3>
                    <p>
                        <strong>Server Management</strong> allows you to manage your server settings and configurations easily.
                    </p>
                </div>
            </div>
            <div class="column">
                <div class="box">
                    <h3 class="title is-4">Server Control</h3>
                    <p>
                        <strong>Server Control</strong> While not able to start/stop the server, you can still use our Rcon Console to send commands to the server, schedule messages, and more.
                    </p>
                    <hr/>
                    <x-bulma-message type="warning" header="Note">
                        This feature is still in development and will be available in a future release.
                    </x-bulma-message>
                </div>
        </div>
    </div>
</section>