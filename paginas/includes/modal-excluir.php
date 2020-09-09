<!-- MODAL EXCLUIR -->
<div class="modal fade" id="modalRem<?=$id?>">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header bg-danger text-light">
        <h5 class="modal-title" id="exampleModalLabel"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p style="text-transform: uppercase">Tem CERTEZA QUE QUER EXCLUIR <b><?=$nomeComp?></b>?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">NÃO</button>
        <button class="btn btn-success delete" data-id="<?=$id?>" data-dismiss="modal">SIM</button>
      </div>
    </div>
  </div>
</div>