<html>
  <head>
    <title>Buy cool new product</title>
  </head>
  <body>
    <form action="{{ route('stripe.checkout') }}" method="POST">
		@csrf
      <button type="submit">Checkout</button>
    </form>
  </body>
</html>