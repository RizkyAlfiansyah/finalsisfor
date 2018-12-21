<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Library Add</h3>
            </div>
            <?php echo form_open('admin/libraryTambah'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="judul" class="control-label">Judul</label>
						<div class="form-group">
							<input type="text" name="judul" value="<?php echo $this->input->post('judul'); ?>" class="form-control" id="judul" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="penulis" class="control-label">Penulis</label>
						<div class="form-group">
							<input type="text" name="penulis" value="<?php echo $this->input->post('penulis'); ?>" class="form-control" id="penulis" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="kategori" class="control-label">Kategori</label>
						<div class="form-group">
							<input type="text" name="kategori" value="<?php echo $this->input->post('kategori'); ?>" class="form-control" id="kategori" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="bahasa" class="control-label">Bahasa</label>
						<div class="form-group">
							<input type="text" name="bahasa" value="<?php echo $this->input->post('bahasa'); ?>" class="form-control" id="bahasa" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="status" class="control-label">Status</label>
						<div class="form-group">
							<input type="text" name="status" value="<?php echo $this->input->post('status'); ?>" class="form-control" id="status" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="deskripsi" class="control-label">Deskripsi</label>
						<div class="form-group">
							<textarea name="deskripsi" class="form-control" id="deskripsi"><?php echo $this->input->post('deskripsi'); ?></textarea>
						</div>
					</div>
				</div>
			</div>
          	<div class="box-footer">
            	<button type="submit" class="btn btn-success">
            		<i class="fa fa-check"></i> Save
            	</button>
          	</div>
            <?php echo form_close(); ?>
      	</div>
    </div>
</div>