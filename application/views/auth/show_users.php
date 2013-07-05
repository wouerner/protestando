<table class="table">
<thead>
    <th>Protestantes</th>
</thead>
<?php foreach($users as $user):?>
    <tr><td><a href="/auth/show?id=<?php echo $user->id?>"><?php echo $user->username?></a></td></tr>
<?php endforeach;?>
</table>
