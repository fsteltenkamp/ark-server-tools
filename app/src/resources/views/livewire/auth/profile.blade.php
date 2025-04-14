<div class="p-5">
    <div class="level">
        <div class="level-left">
            <div class="level-item">
                <h1 class="title">Profile</h1>
            </div>
        </div>
        <div class="level-right">
            <div class="level-item">
                <button class="button is-primary is-small" wire:click="saveChanges">Save Changes</button>&nbsp;
                <button class="button is-danger is-small" wire:click="deleteAccount" wire:confirm="Are you Sure you want to delete your Account? This can NOT be reversed and all your Data will be deleted!">Delete Account</button>
            </div>
        </div>
    </div>
    <a wire:click="switchEditUsername"><x-icon i="pen"/></a>&nbsp;<b><u>Username:</u></b>&nbsp;&nbsp;{{ $user->name }}<br>
    <a wire:click="switchEditEmail"><x-icon i="pen"/></a>&nbsp;<b><u>E-Mail:</u></b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ $user->email }}<br>
    <a wire:click="switchEditPassword"><x-icon i="pen"/></a>&nbsp;<b><u>Password:</u></b>&nbsp;&nbsp;&nbsp;********<br>
    <hr/>
    <div class="field">
        <label class="label">Verify Password&nbsp;<small><i>- To save changes, please enter your current password.</i></small></label>
        <div class="control">
            <input class="input" type="password" name="current_password" wire:model.live="currentPassword" placeholder="Current Password" value="{{old('current_password')}}">
        </div>
        @if(!empty($currentPassword))
        <div class="control" style="border: 1px solid #dbdbdb; padding: 10px;border-top: none;">
            <ul>
                <li>
                    <x-condition :condition="$currentPassword_condition_correct" message="{{$currentPassword_condition_correct ? 'Password Verified' : 'Password is not correct.'}}"/>
                </li>
            </ul>
        </div>
        @endif
    </div>
    @if($editUsername || $editEmail || $editPassword)
    @if($editUsername)
    <div class="field">
        <label class="label">Display Name</label>
        <div class="control">
            <input class="input" type="text" name="display_name" wire:model.live="newUsername" value="{{old('name')}}" placeholder="{{$username}}">
        </div>
        @if(!empty($newUsername))
        <div class="control" style="border: 1px solid #dbdbdb; padding: 10px;border-top: none;">
            <ul>
                <li>
                    <x-condition :condition="$displayName_condition_free" message="{{$displayName_condition_free ? 'Username Available' : 'Username Taken'}}"/>
                </li>
            <li>
        </div>
        @endif
    </div>
    @endif
    @if($editEmail)
    <div class="field">
        <label class="label">E-mail</label>
        <div class="control">
            <input class="input" type="email" name="email" wire:model.live="newEmail" value="{{old('email')}}" placeholder="{{$email}}">
        </div>
        @if(!empty($email))
        <div class="control" style="border: 1px solid #dbdbdb; padding: 10px;border-top: none;">
            <ul>
                <li>
                    <x-condition :condition="$email_condition_valid" message="Valid email address"/>
                </li>
            <li>
        </div>
        @endif
    </div>
    @endif
    @if($editPassword)
    <div class="field">
        <label class="label">Password</label>
        <div class="control">
            <input class="input" type="password" name="password" wire:model.live="newPassword" placeholder="Leave blank to keep current password" value="{{old('password')}}">
        </div>
        @if (!empty($newPassword))
        <div class="control" style="border: 1px solid #dbdbdb; padding: 10px;border-top: none;">
            <ul>
                <li>
                    <x-condition :condition="$password_condition_length" message="At least 8 characters"/>
                </li>
                <li>
                    <x-condition :condition="$password_condition_uppercase" message="At least one uppercase letter"/>
                </li>
                <li>
                    <x-condition :condition="$password_condition_lowercase" message="At least one lowercase letter"/>
                </li>
                <li>
                    <x-condition :condition="$password_condition_number" message="At least one number"/>
                </li>
                <li>
                    <x-condition :condition="$password_condition_special" message="At least one special character"/>
                </li>
            </ul>
        </div>
        @endif
    </div>
    @if (!empty($newPassword))
    <div class="field">
        <label class="label">Repeat Password</label>
        <div class="control">
            <input class="input" type="password" name="password_confirmation" wire:model.live="newPassword_repeat" placeholder="Re-enter password" value="{{old('password_confirmation')}}">
        </div>
        @if(!empty($newPassword_repeat))
        <div class="control" style="border: 1px solid #dbdbdb; padding: 10px;border-top: none;">
            <ul>
                <li>
                    <x-condition :condition="$password_repeat_condition_same" message="Passwords match"/>
                </li>
            </ul>
        </div>
        @endif
    </div>
    @endif
    @endif
    @endif
</div>
