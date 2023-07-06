<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Request Quotation GRANDSATYA</title>
  </head>
  <body>
    <h4>Request Quotation</h4>
    <table>
      <tr>
        <th>Nama</th>
        <th>{{ $detail['name'] }}</th>
      </tr>
      <tr>
        <th>Email</th>
        <th>{{ $detail['email'] }}</th>
      </tr>
      <tr>
        <th>Subject</th>
        <th>{{ $detail['subject'] }}</th>
      </tr>
      <tr>
        <th>Pesan</th>
        <th>{{ $detail['message'] }}</th>
      </tr>
    </table>
  </body>
</html>