<div class="card">
    <div class="card-body">
        <div class="form-group row">
            <label for="domain" class="col-sm-2 col-form-label text-right">Domain</label>
            <div class="col-sm-10">
                {!! Form::text('domain',null,['id'=>'domain','class'=>'form-control','required']) !!}
                <small class="form-text text-muted">Domain name example: comet-sms.mtcsb.my</small>
            </div>
        </div>
        <div class="form-group row">
            <label for="domain" class="col-sm-2 col-form-label text-right">Path</label>
            <div class="col-sm-10">
                {!! Form::text('path',null,['id'=>'path','class'=>'form-control','required']) !!}
                <small class="form-text text-muted">Full path: /var/www/html/application-folder</small>
            </div>
        </div>
        <div class="form-group row">
            <label for="server_ip" class="col-sm-2 col-form-label text-right">Server IP</label>
            <div class="col-sm-10">
                {!! Form::text('server_ip',null,['id'=>'server_ip','class'=>'form-control']) !!}
                <small class="form-text text-muted">Optional</small>
            </div>
        </div>
        <h5 class="my-5 text-muted">SSH Keys (optional)</h5>
        <div class="form-group row">
            <label for="ssh_name" class="col-sm-2 col-form-label text-right">SSH Key Name</label>
            <div class="col-sm-10">
                {!! Form::text('ssh_name',null,['id'=>'ssh_name','class'=>'form-control']) !!}
                <small class="form-text text-muted"></small>
            </div>
        </div>
        <div class="form-group row">
            <label for="ssh_pubkey" class="col-sm-2 col-form-label text-right">SSH Pub Key</label>
            <div class="col-sm-10">
                {!! Form::textarea('ssh_pubkey',null,['id'=>'ssh_pubkey','class'=>'form-control','rows'=>2]) !!}
                <small class="form-text text-muted"></small>
            </div>
        </div>
        <h5 class="my-5 text-muted">Database Settings (optional)</h5>
        <div class="form-group row">
            <label for="db_username" class="col-sm-2 col-form-label text-right">DB Username</label>
            <div class="col-sm-10">
                {!! Form::text('db_username',null,['id'=>'db_username','autocomplete'=>'off','class'=>'form-control']) !!}
                <small class="form-text text-muted">Database username</small>
            </div>
        </div>
        <div class="form-group row">
            <label for="db_password" class="col-sm-2 col-form-label text-right">DB Password</label>
            <div class="col-sm-10">
                {!! Form::password('db_password',['id'=>'db_password','class'=>'form-control']) !!}
                <small class="form-text text-muted">Database password</small>
            </div>
        </div>
        <div class="form-group row">
            <label for="db_database" class="col-sm-2 col-form-label text-right">DB Name</label>
            <div class="col-sm-10">
                {!! Form::text('db_database',null,['id'=>'db_database', 'autocomplete' => 'off', 'class'=>'form-control']) !!}
                <small class="form-text text-muted">Database name</small>
            </div>
        </div>
        <div class="row">
            <div class="form-submit col-sm-10 ml-auto">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </div>
</div>