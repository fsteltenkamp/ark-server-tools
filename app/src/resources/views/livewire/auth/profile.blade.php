<div class="p-5">
    <div class="field">
        <label class="label">Display Name</label>
        <div class="control">
            <input class="input" type="text" name="display_name" value="{{ old('display_name', auth()->user()->name) }}" required>
        </div>
    </div>

    <div class="field">
        <label class="label">E-mail</label>
        <div class="control">
            <input class="input" type="email" name="email" value="{{ old('email', auth()->user()->email) }}" required>
        </div>
    </div>

    <div class="field">
        <label class="label">Password</label>
        <div class="control">
            <input class="input" type="password" name="password" placeholder="Leave blank to keep current password">
        </div>
    </div>

    <div class="field">
        <label class="label">Avatar</label>
        <div class="control">
            <input class="file-input" type="file" name="avatar">
        </div>
    </div>

    <div class="field">
        <div class="control">
            <button class="button is-primary" type="submit">Save Changes</button>
        </div>
    </div>
</div>
