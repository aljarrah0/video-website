<div class="row">
    <div class="col-md-4">
        <div class="form-group bmd-form-group">
            <label class="bmd-label-floating">الاسم</label>
            <input type="text" name="name" value="{{ old('name', isset($user) ? $user->name : '') }}" class="form-control">
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group bmd-form-group">
            <label class="bmd-label-floating">الإيميل</label>
            <input type="email" name="email" value="{{ old('email', isset($user) ? $user->email : '') }}" class="form-control">
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group bmd-form-group">
            <label class="bmd-label-floating">كلمة المرور</label>
            <input type="password" name="password" class="form-control">
        </div>
    </div>
</div>
