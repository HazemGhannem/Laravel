<head>
@vite(['resources/sass/app.scss'])
@vite(['resources/js/app.js'])
</head>
<form>
<div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1"
    aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never
    share your email with anyone else.</small>
</div>
<div class="form-group">
    <label for="exampleInputPassword1">password</label>
    <input type="password" class="form-control" id="exampleInputPassword1"
    aria-describedby="passwordHelp" placeholder="Enter password">
</div>
<div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1"> Check me out </label>
</div>
<button type="submit" class="btn btn-primary">submit</button>
</form>