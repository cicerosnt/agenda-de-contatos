

    
      <form method="POST" action="login.php" class="form-signin">
        <img
            src="./icons/person.svg"
            class="logo"
            class="mb-4"
            alt=""
            width="72"
            height="72"
        />
        <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
        <label for="inputEmail" class="sr-only">Email address</label>
        <input
            name="user"
            type="email"
            id="inputEmail"
            class="form-control"
            placeholder="Email address"
            required
            autofocus
        />
        <label for="inputPassword" class="sr-only">Password</label>
        <input
            name="password"
            type="password"
            id="inputPassword"
            class="form-control"
            placeholder="Password"
            required
        />
        <div class="checkbox mb-3">
          <label>
            <input type="checkbox" value="remember-me" /> Remember me
          </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">
          Sign in
        </button>
        <p class="mt-5 mb-3 text-muted">&copy; 2017-2020</p>
      </form>
    

    