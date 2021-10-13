<!DOCTYPE html>
<html>
<head>
<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 90%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 15px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
}
</style>
</head>
<body>


<table id="customers">
  <tr>
   <td><h2>
 {{--  <?php $image_path = '/uploads/easyschool.png'; ?>
  <img src="{{ public_path() . $image_path }}" width="200" height="100"> --}}</br>
      Hostel Managemnt System
    </h2></td>
     <td><h2> Hostel Managemnt System</h2>
     <p> Address : Thakurgaon , Govindanagor</p>
     <p>Phone : 343434343434</p>
     <p>Email : hosteladmin@gmail.com</p>
  <h4>Border Registration Page</h4>
    </td> 
  </tr>
  
   
</table>



<table id="customers">
  <tr>
    <th width="10%">Sl</th>
    <th width="45%">Border Information</th>
    <th width="45%">Border Data</th>
  </tr>
  <tr>
    <td>1</td>
    <td><b>Registration No.</b></td>
    <td>{{ $borders->reg_no }}</td>
  </tr>
  <tr>
    <td>1</td>
    <td><b>Room No.</b></td>
    <td>{{ $borders['room']['room_no'] }}</td>
  </tr>
  <tr>
    <td>2</td>
    <td><b>Room Seater</b></td>
    <td>{{ $borders['room']['seater'] }}</td>
  </tr>

    <tr>
    <td>3</td>
    <td><b>Fees Per month</b></td>
    <td>{{  $borders['room']['fees']  }}</td>
  </tr>

<tr>
    <td>4</td>
    <td><b>Posting</b></td>
    <td>{{ $borders->posting_date }}</td>
  </tr>

  <tr>
    <td>5</td>
    <td><b>Stay From</b></td>
    <td>{{ $borders->stayfrom }}</td>
  </tr>

  <tr>
    <td>6</td>
    <td><b>Durations</b></td>
    <td>{{ $borders->durations }}</td>
  </tr>

  <tr>
    <td>7</td>
    <td><b>Food Status</b></td>
    <td>{{ $borders->foodstatus}}</td>
  </tr>
  <tr>
    <td>8</td>
    <td><b>Course Name </b></td>
    <td>{{ $borders['course']['course_full_name'] }}</td>
  </tr>
  <tr>
    <td>9</td>
    <td><b>First Name</b></td>
    <td>{{ $borders->first_name }}</td>
  </tr>
  <tr>
    <td>10</td>
    <td><b>Last Name</b></td>
    <td>{{ $borders->last_name }}</td>
  </tr>

    <tr>
    <td>11</td>
    <td><b>Phone No.</b></td>
    <td>{{ $borders->phone_no}}</td>
  </tr>


    <tr>
    <td>12</td>
    <td><b>Email</b></td>
    <td>{{ $borders->email }}</td>
  </tr>
    <tr>
    <td>13</td>
    <td><b>Gender </b></td>
    <td>{{ $borders->gender}} %</td>
  </tr>
    <tr>
    <td>14</td>
    <td><b>Guardian Name </b></td>
    <td>{{ $borders->gurdian_name }}</td>
  </tr>
    <tr>
    <td>15</td>
    <td><b>Contact  </b></td>
    <td>{{ $borders->gurdian_contact }}</td>
  </tr>
    <tr>
    <td>16</td>
    <td><b>Guardian Relations </b></td>
    <td>{{ $borders->gurdian_relation }}</td>
  </tr>
    <tr>
    <td>17</td>
    <td><b>current_address </b></td>
    <td>{{ $borders->current_address }}</td>
  </tr>

   <tr>
    <td>18</td>
    <td><b>current_state </b></td>
    <td>{{ $borders->current_state }}</td>
  </tr>
   <tr>
    <td>19</td>
    <td><b>current_city </b></td>
    <td>{{ $borders->current_city }}</td>
  </tr>

   <tr>
    <td>20</td>
    <td><b>current_pincode </b></td>
    <td>{{ $borders->current_pincode }}</td>
  </tr>

   <tr>
    <td>21</td>
    <td><b>permanent_address </b></td>
    <td>{{ $borders->permanent_address }}</td>
  </tr>

  <tr>
    <td>22</td>
    <td><b>permanent_state </b></td>
    <td>{{ $borders->permanent_state }}</td>
  </tr>

 <tr>
    <td>23</td>
    <td><b>permanent_city </b></td>
    <td>{{ $borders->permanent_city }}</td>
  </tr>

   <tr>
    <td>24</td>
    <td><b>permanent_pincode </b></td>
    <td>{{ $borders->permanent_pincode }}</td>
  </tr>

  



</table>
<br> <br>
  <i style="font-size: 10px; float: right;">Print Data : {{ date("d M Y") }}</i>

</body>
</html>