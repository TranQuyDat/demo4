<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Send Email</title>
  </head>
  <body>
    <form action="/send-email" method="POST">
      @csrf
      <label for="email">Email:</label>
      <input type="email" name="email" id="mail" required><br>

      <label for="subject">Subject:</label>
      <input type="text" name="subject" id="subject" required><br>

      <label for="message">Message:</label>
      <textarea name="message" id="message" cols="30" rows="10" required></textarea><br>

<button type="submit">Send</button>
</form>
</body>
