<?php
$sql="SELECT o.`nome` as `opnome`, u.`nome`, horario, t.`nome` as `tipo` FROM `operacao` o, `paciente` p, `usuario`u , `tipo_operacao` t WHERE o.`cod_paciente`= p.`cod_paciente` AND u.`cod_usuario`=p.`usuario_cod_usuario` AND o.`tipo_operacao_cod_tip_op`=t.`cod_tip_op`;";
$result = $conn->query($sql);
?>
<!-- Page Heading -->
<p class="mb-4">Listagem de funcionários cadastrados.</p>

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <!-- <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary"></h6>
  </div> -->
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>Paciente</th>
            <th>Tipo</th>
            <th>Data</th>
            <th>Ações</th>
          </tr>
        </thead>
        <tbody>
        <?php
                    if ($result->num_rows > 0) {
                      // output data of each row
                      while($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>".$row["nome"]."</td>";
                        echo "<td>".$row["tipo"]."</td>";
                        echo "<td>".$row["horario"]."</td>";
                  ?>
                      <td>
                        <a href="#" class="btn btn-info btn-circle btn-sm">
                            <i class="fas fa-edit"></i>
                        </a>
                        <a href="#" class="btn btn-danger btn-circle btn-sm">
                            <i class="fas fa-trash"></i>
                        </a>
                      </td>
                  <?php
                  echo "</tr>";
                }
              }
            ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
