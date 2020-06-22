@if (count($Cars)==0) 
 <p color='red'> There are no records in the database!</p>
  @else
    <table border="1">    
     <tr>     
     <td> Car id </td>     
     <td> Car model </td>     
     <td> Car color </td>    
     <td> Price </td>    
     <td>  </td>   
     </tr>  
     @foreach ($Cars as $Car)   
     <tr>     
     <td> {{ $Car->id }} </td>    
     <td> {{ $Car->model }} </td>    
     <td> {{ $Car->color }} </td>    
     <td> <input type="button" value="show" onclick="showPrice({{ $Car->id }})"> </td>
     <td> <form method="POST" action="{{ action('CarController@destroy', $Car->id) }}">@csrf @method('DELETE')<input type="submit" value="delete"></form> </td> 
     </td>  
    @endforeach  
    </table>
    @endif
     <p> <input type="button" value="New Car"> </p> 
 
<script>  function showPrice(CarID) {
       window.location.href="/App/Car/"+CarID;  
       }
</script>