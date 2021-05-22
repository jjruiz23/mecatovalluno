<div class="modal-dialog">
			<div class="modal-content">
				<form name="add_product" id="add_product">
					<div class="modal-header">						
						<h4 class="modal-title">Agregar Producto</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">					
						<div class="form-group">
							<label>Código</label>
							<input type="text" name="code"  id="code" class="form-control" required>
							
						</div>
						<div class="form-group">
							<label>Producto</label>
							<input type="text" name="name" id="name" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Categoría</label>
							<input type="text" name="category" id="category" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Stock</label>
							<input type="number" name="stock" id="stock" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Precio</label>
							<input type="text" name="price" id="price" class="form-control" required>
						</div>					
					</div>
					<div class="modal-footer">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancelar">
						<input type="submit" class="btn btn-success" value="Guardar datos">
					</div>
				</form>
			</div>
		</div>
	</div>