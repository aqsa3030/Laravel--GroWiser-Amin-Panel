<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form action=  "/checkStatus"  method="post" >
     @csrf
     <div class="form-group">
      <label for="exampleFormControlSelect1">Plant Names</label>
      <select class="form-control" id="status" name="plant_id">
@foreach($collection as $item)
        <option value="{{$item['id']}}" >{{$item['common_name']}}</option>
@endforeach
      </select>
    </div>


    <div class="form-group">
      <label for="exampleFormControlTextarea1">Post Status</label>
    <input type="Status" name="plant_available" value="">

    </div>
    <button>Save <button>
</form>
  </body>
</html>
