 	<header>
 		<div class="container">
				<h1>Your NuYu</h1>
			</div>
 	</header>
  <?php
 // require_once('/src/jpgraph.php'); -->> Graph for progress and food
 //require_once('/src/jpgraph_bar.php'); 
  //$db = mysql_connect("localhost", "root","") or die(mysql_error());
//
 // while($row1 = mysql_fetch_array($sql1))
 // {
 //$row2 = $model1.get();
 // $row3 = $model2.get();
  //$data[] = $row2;
 //$data[] = $row3;
// $leg[] = $row1['category'];
// }
// $graph = new Graph(950,750,"auto");
// $graph->SetScale("textint");
// $graph->img->SetMargin(50,30,50,50);

// $graph->SetShadow();

 // $graph->xaxis->SetTickLabels($leg);

 // $bplot = new BarPlot($data);
 // $bplot->SetFillColor("lightgreen"); 
 // $bplot->value->Show();
  //$bplot->value->SetFont(FF_ARIAL,FS_BOLD);
 // $bplot->value->SetAngle(45);
 // $bplot->value->SetColor("black","navy");

 // $graph->Add($bplot);
 // $graph->Stroke(); ?>
 			
           <div class="table-responsive">
             <table class="table table-striped">
               <thead>
                 <tr>
                   <th>Name</th>
                   <th>Location</th>
                   <th>Email</th>
                   
                 </tr>
               </thead>
               <tbody>
                <? foreach ($model3 as $rs): ?>
                <tr>
                  <td><?=$rs['Name']?></td>
                  <td><?=$rs['Location']?></td>
                  <td><?=$rs['Email']?></td>
                  <td>
                  	
                  		<a title="Edit" class="btn btn-default btn-sm toggle-modal" data-target="#myModal" href="?action=edit&id=<?=$rs['id']?>">
						<i class="glyphicon glyphicon-pencil"></i>
						</a>
						<a title="Delete" class="btn btn-default btn-sm toggle-modal" data-target="#myModal" href="?action=delete&id=<?=$rs['id']?>">
						<i class="glyphicon glyphicon-trash"></i>
						</a>
                  </td>
                  
                 </tr>
                <? endforeach; ?>
               </tbody>
             </table>
           </div>
 
 			</div>
 
 		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
 		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
 		<script src="https://cdnjs.cloudflare.com/ajax/libs/holder/2.4.0/holder.js"></script>
 		<script type="text/javascript">
 			