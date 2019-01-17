<div class="card">
	<div class="text-center card-header">
		<h4>Projeto 01</h4>
		<a href="<?= base_url('project_controller/open/1') ?>"
		   class="btn form-inline btn-outline-primary opt">Review</a>
		<a href="<?= base_url('project_controller/planning/1') ?>" class="btn form-inline btn-outline-primary opt">Planning</a>
		<a href="<?= base_url('project_controller/conducting/1') ?>" class="btn form-inline btn-outline-primary opt">Conducting</a>
		<a href="<?= base_url('project_controller/reporting/1') ?>" class="btn form-inline btn-outline-primary opt">Reporting</a>
	</div>
	<div class="card-body">
		<h4>Planning</h4>
		<ul class="nav nav-pills nav-justified">
			<li class="nav-item">
				<a data-toggle="pill" class="nav-link active" href="#tab_overall">Overall information</a>
			</li>
			<li class="nav-item">
				<a data-toggle="pill" class="nav-link" href="#tab_research">Research Questions</a>
			</li>
			<li class="nav-item">
				<a data-toggle="pill" class="nav-link" href="#tab_databases">Data Bases</a>
			</li>
			<li class="nav-item">
				<a data-toggle="pill" class="nav-link" href="#tab_search_string" onclick="showString();">Search
					String</a>
			</li>
			<li class="nav-item">
				<a data-toggle="pill" class="nav-link" href="#tab_search_strategy">Search Strategy</a>
			</li>
			<li class="nav-item">
				<a data-toggle="pill" class="nav-link" href="#tab_criteria">Criteria</a>
			</li>
			<li class="nav-item">
				<a data-toggle="pill" class="nav-link" href="#tabquality">Quality Assessment</a>
			</li>
			<li class="nav-item">
				<a data-toggle="pill" class="nav-link" href="#tabdata">Data Extraction</a>
			</li>
		</ul>
	</div>

	<div class="tab-content">
		<div class="tab-pane active container" id="tab_overall">
			<div class="row">
				<div class="col-sm-12 col-md-6">
					<label for="domain"><strong>Domains</strong></label>
					<div class="input-group">
						<input type="text" class="form-control" id="domain">
						<div class="input-group-append">
							<button class="btn btn-success" type="button" onclick="add_domain();"><span
									class="fas fa-plus"></span></button>
						</div>
					</div>
					<br>
					<table id="table_domains" class="table table-responsive-sm">
						<caption>List of Domains</caption>
						<thead>
						<tr>
							<th>Domain</th>
							<th>Delete</th>
						</tr>
						</thead>
						<tbody>
						</tbody>
					</table>
				</div>

				<div class="col-sm-12 col-md-6">
					<label for="language"><strong>Select languages</strong></label>
					<div class="input-group">
						<select class="form-control" id="language">
							<option>English</option>
							<option>Portuguese</option>
							<option>Spanish</option>
							<option>Russian</option>
							<option>French</option>
						</select>
						<div class="input-group-append">
							<button class="btn btn-success" type="button" onclick="add_language();"><span
									class="fas fa-plus"></span></button>
						</div>
					</div>
					<br>
					<table id="table_languages" class="table table-responsive-sm">
						<caption>List of Languages</caption>
						<thead>
						<tr>
							<th>Language</th>
							<th>Delete</th>
						</tr>
						</thead>
						<tbody>
						</tbody>
					</table>
				</div>
				<br>
				<div class="col-sm-12 col-md-6">
					<label for="study_type"><strong>Select study type</strong></label>
					<div class="input-group">
						<select class="form-control" id="study_type">
							<option>All types</option>
							<option>Article in Press</option>
							<option>Article</option>
							<option>Book</option>
							<option>Thesis</option>
						</select>
						<div class="input-group-append">
							<button class="btn btn-success" type="button" onclick="add_study_type();"><span
									class="fas fa-plus"></span></button>
						</div>
					</div>
					<br>
					<table id="table_study_type" class="table table-responsive-sm">
						<caption>List of Study Type</caption>
						<thead>
						<tr>
							<th>Study Type</th>
							<th>Delete</th>
						</tr>
						</thead>
						<tbody>
						</tbody>
					</table>
				</div>
				<div class="col-sm-12 col-md-6">
					<label for="keywords"><strong>Keywords</strong></label>
					<div class="input-group">
						<input type="text" class="form-control" id="keywords">
						<div class="input-group-append">
							<button class="btn btn-success" type="button" onclick="add_keywords();"><span
									class="fas fa-plus"></span></button>
						</div>
					</div>
					<br>
					<table id="table_keywords" class="table table-responsive-sm">
						<caption>List of Keywords</caption>
						<thead>
						<tr>
							<th>Keyword</th>
							<th>Delete</th>
						</tr>
						</thead>
						<tbody>
						</tbody>
					</table>
				</div>
				<div class="col-sm-12 col-md-3">
					<label for="start_date"><strong>Start and End Date</strong></label>
					<div class="input-group">
						<div class="input-group-prepend">
							<button class="btn btn-success"><span class="far fa-calendar-check "></span></button>
						</div>
						<input type="Date" id="start_date" class="form-control" title="Start Date">
					</div>
					<div class="input-group">
						<div class="input-group-prepend">
							<button class="btn btn-danger"><span class="far fa-calendar-check "></span></button>
						</div>
						<input type="Date" id="end_date" class="form-control" title="End Date">
					</div>
				</div>
			</div>
			<br>
			<div class="form-inline container justify-content-between">
				<a href="#" class="btn btn-secondary disabled"><span class="fas fa-backward"></span> Previous</a>
				<a class="btn btn-secondary" href="#tab_research">Next <span class="fas fa-forward"></span></a>
			</div>
		</div>
		<div class="tab-pane container" id="tab_research">
			<div class="row">
				<label for="research_question" class="container"><strong>Research Questions</strong></label>
			</div>
			<div class="form-inline">
				<label for="id_research_question" class="col-sm-12 col-md-1">ID</label>
				<label for="description_research_question" class="col-sm-12 col-md-6">Description</label>
			</div>
			<div class="form-inline">
				<input type="text" id="id_research_question" placeholder="ID"
					   class="form-control col-sm-12 col-md-1">
				<div class="input-group col-md-11 col-sm-12">
					<input type="text" id="description_research_question" placeholder="Description"
						   class="form-control">
					<div class="input-group-append">
						<button class="btn btn-success" type="button" onclick="add_research_question();"><span
								class="fas fa-plus"></span></button>
					</div>
				</div>
			</div>
			<br>
			<table id="table_research_question" class="table table-responsive-sm">
				<caption>List of Research Questions</caption>
				<thead>
				<tr>
					<th>ID</th>
					<th>Research Question</th>
					<th>Actions</th>
				</tr>
				</thead>
				<tbody>
				</tbody>
			</table>
			<br>
			<div class="form-inline container justify-content-between">
				<a href="#tab_overall" class="btn btn-secondary"><span class="fas fa-backward"></span> Previous</a>
				<a href="#tab_databases" class="btn btn-secondary">Next <span class="fas fa-forward"></span></a>
			</div>
		</div>
		<div class="tab-pane container" id="tab_databases">
			<label for="databases"><strong>Data Bases</strong></label>
			<div class="input-group col-md-3">
				<select class="form-control" id="databases">
					<option>Scopus</option>
					<option>ACM</option>
					<option>IEEE</option>
					<option>Science Direct</option>
					<option>Enginnering Village</option>
					<option>Springer Link</option>
					<option>Google</option>
				</select>
				<div class="input-group-append">
					<button class="btn btn-success" type="button" onclick="add_database();"><span
							class="fas fa-plus"></span></button>
				</div>
			</div>
			<br>
			<table id="table_databases" class="table table-responsive-sm">
				<caption>List of Databases</caption>
				<thead>
				<tr>
					<th>Database</th>
					<th>Delete</th>
				</tr>
				</thead>
				<tbody>
				</tbody>
			</table>
			<br>
			<div class="form-inline container justify-content-between">
				<a href="#tab_research" class="btn btn-secondary"><span class="fas fa-backward"></span> Previous</a>
				<a href="#tab_search_string" onclick="showString();" class="btn btn-secondary">Next <span
						class="fas fa-forward"></span></a>
			</div>
		</div>
		<div class="tab-pane container" id="tab_search_string">
			<label for="term"><strong>Search String</strong></label>
			<div class="form-inline">
				<label for="term">Term</label>
			</div>
			<div class="input-group col-md-4">
				<input type="text" class="form-control" id="term">
				<div class="input-group-append">
					<button class="btn btn-success" type="button" onclick="add_term();"><span
							class="fas fa-plus"></span></button>
				</div>
			</div>
			<div class="form-inline">
				<label for="list_term">Synonym</label>
			</div>
			<div class="input-group col-md-6">
				<select class="form-control col-md-4" id="list_term">
				</select>
				<input type="text" class="form-control" placeholder="Add a Synonym to Term"
					   id="synonym">
				<div class="input-group-append">
					<button class="btn btn-success" type="button" onclick="add_synonym();"><span
							class="fas fa-plus"></span>
					</button>
				</div>
			</div>
			<br>
			<table id="table_search_string" class="table table-responsive-sm">
				<caption>List of Term</caption>
				<thead>
				<tr>
					<th>Term</th>
					<th>Synonyms</th>
					<th>Actions</th>
				</tr>
				</thead>
				<tbody>
				</tbody>
			</table>
			<br>
			<label><strong>Strings</strong></label>
			<div class="form-group" id="div_string_gnerics">
				<label>Generic String</label>
				<textarea class="form-control" id="string_generic"></textarea>
				<a class="btn btn-info opt" onclick="generateString(0);">Gerar</a>
				<hr>
			</div>
			<div class="form-group" id="div_string_scopus">
				<label>SCOPUS</label>
				<textarea class="form-control" id="string_scopus"></textarea>
				<a class="btn btn-info opt" onclick="generateString(1);">Gerar</a>
				<hr>
			</div>
			<div class="form-group" id="div_string_acm">
				<label>ACM</label>
				<textarea class="form-control" id="string_acm"></textarea>
				<a class="btn btn-info opt" onclick="generateString(2);">Gerar</a>
				<hr>
			</div>
			<div class="form-group" id="div_string_ieee">
				<label>IEEE</label>
				<textarea class="form-control" id="string_ieee"></textarea>
				<a class="btn btn-info opt" onclick="generateString(3);">Gerar</a>
				<hr>
			</div>
			<div class="form-group" id="div_string_science">
				<label>Science Direct</label>
				<textarea class="form-control" id="string_science"></textarea>
				<a class="btn btn-info opt" onclick="generateString(4);">Gerar</a>
				<hr>
			</div>
			<div class="form-group" id="div_string_enginnering">
				<label>Enginnering Village</label>
				<textarea class="form-control" id="string_enginnering"></textarea>
				<a class="btn btn-info opt" onclick="generateString(5);">Gerar</a>
				<hr>
			</div>
			<div class="form-group" id="div_string_springer">
				<label>Springer Link</label>
				<textarea class="form-control" id="string_springer"></textarea>
				<a class="btn btn-info opt" onclick="generateString(6);">Gerar</a>
				<hr>
			</div>
			<div class="form-group" id="div_string_google">
				<label>Google</label>
				<textarea class="form-control" id="string_google"></textarea>
				<a class="btn btn-info opt" onclick="generateString(7);">Gerar</a>
				<hr>
			</div>

			<div class="form-inline container justify-content-between">
				<a href="#tab_databases" class="btn btn-secondary"><span class="fas fa-backward"></span> Previous</a>
				<a href="#tab_search_strategy" class="btn btn-secondary opt">Next <span
						class="fas fa-forward"></span></a>
			</div>
		</div>
		<div class="tab-pane container" id="tab_search_strategy">
			<label for="search_strategy"><strong>Search Strategy</strong></label>
			<textarea rows="8" class="form-control" id="search_strategy"></textarea>
		</div>
		<div class="tab-pane container" id="tab_criteria">
			<label for="databases"><strong>Criteria</strong></label>
			<div class="form-inline">
				<label for="rule_inclusion" class="col-sm-12 col-md-2">Inclusion Rule</label>
				<label for="rule_exclusion" class="col-sm-12 col-md-2">Exclusion Rule</label>
			</div>
			<div class="form-inline">
				<select class="form-control col-sm-12 col-md-2 opt" id="rule_inclusion">
					<option value="1">All</option>
					<option value="2">Any</option>
					<option value="3">At Least</option>
				</select>
				<select class="form-control col-sm-12 col-md-2 opt" id="rule_exclusion">
					<option value="1">All</option>
					<option value="2">Any</option>
					<option value="3">At Least</option>
				</select>
			</div>

			<div class="form-inline">
				<label for="id_criteria" class="col-sm-12 col-md-1">ID</label>
				<label for="description_criteria" class="col-sm-12 col-md-6">Description</label>
			</div>
			<div class="form-inline">
				<input type="text" id="id_criteria" placeholder="ID" class="form-control col-sm-12 col-md-1">
				<div class="input-group col-md-11 col-sm-12">
					<input type="text" id="description_criteria" placeholder="Description" class="form-control">
					<div class="input-group-append">
						<select class="form-control" id="select_type">
							<option value="Inclusion">Inclusion</option>
							<option value="Exclusion">Exclusion</option>
						</select>
						<button class="btn btn-success" type="button" onclick="add_criteria()"><span class="fas fa-plus"></span></button>
					</div>
				</div>
			</div>
			<br>
			<table id="table_criteria" class="table table-responsive-sm">
				<caption>List of Criteria</caption>
				<thead>
				<tr>
					<th>Select</th>
					<th>ID</th>
					<th>Criteria</th>
					<th>Type</th>
					<th>Delete</th>
				</tr>
				</thead>
				<tbody>
				</tbody>
				<tfoot>
				<tr>
					<th>Select</th>
					<th>ID</th>
					<th>Criteria</th>
					<th>Type</th>
					<th>Delete</th>
				</tr>
				</tfoot>
			</table>
			<br>
			<div class="form-inline container justify-content-between">
				<a class="btn btn-secondary"><span class="fas fa-backward"></span> Previous</a>
				<a class="btn btn-secondary">Next <span class="fas fa-forward"></span></a>
			</div>
		</div>
		<div class="tab-pane container" id="tabquality">
			<label for="start_interval"><strong>Quality Assessment</strong></label>
			<div class="form-inline">
				<label for="start_interval" class="col-sm-12 col-md-4">General Score Interval</label>
				<label for="general_score_desc" class="col-sm-12 col-md-8">General Score Description</label>
			</div>
			<div class="row">
				<div class="input-group col-md-4">
					<input type="number" id="start_interval" class="form-control" step="0.5" placeholder="4.5">
					<input type="number" id="end_interval" class="form-control" step="0.5" placeholder="5">
				</div>
				<div class="input-group col-md-8">
					<input type="text" id="general_score_desc" class="form-control" placeholder="Description">
					<div class="input-group-append">
						<button class="btn btn-success" type="button"><span class="fas fa-plus"></span></button>
					</div>
				</div>
				<label for="min_score_to_app" class="col-md-12">Minimum General Score to Approve</label>
				<div class="input-group container">
					<select class="form-control col-md-3" id="min_score_to_app">
						<option></option>
						<option>Ruim</option>
						<option>Bom</option>
					</select>
				</div>
			</div>
			<br>
			<table id="table_general_score" class="table table-responsive-sm">
				<caption>List of General Score</caption>
				<thead>
				<tr>
					<th>Score Interval</th>
					<th>Score Description</th>
					<th>Delete</th>
				</tr>
				</thead>
				<tbody>
				<tr>
					<td>
						<div class="form-inline">
							<input type="number" id="start_interval" class="form-control" step="0.5"
								   placeholder="4.5">
							<input type="number" id="end_interval" class="form-control" step="0.5" placeholder="5">
						</div>
					</td>
					<td contenteditable="true">Descrição</td>
					<td>
						<button class="btn btn-danger"><span class="far fa-trash-alt"></span></button>
					</td>
				</tr>
				<tr>
					<td>
						<div class="form-inline">
							<input type="number" id="start_interval" class="form-control" step="0.5"
								   placeholder="4.5">
							<input type="number" id="end_interval" class="form-control" step="0.5" placeholder="5">
						</div>
					</td>
					<td contenteditable="true">Descrição</td>
					<td>
						<button class="btn btn-danger"><span class="far fa-trash-alt"></span></button>
					</td>
				</tr>
				</tbody>
			</table>
			<br>
			<label for="id_qa"><strong>Question Quality</strong></label>
			<br>
			<div class="form-inline">
				<label for="id_qa" class="col-sm-12 col-md-2">ID</label>
				<label for="qa_description" class="col-sm-12 col-md-8">Description</label>
				<label for="qa_weight" class="col-sm-12 col-md-2">Weight</label>
			</div>
			<div class="row">
				<div class="input-group col-md-2">
					<input type="text" class=" form-control" id="id_qa">
				</div>
				<div class="input-group col-md-8">
					<input type="text" class=" form-control" id="desc_qa">
				</div>
				<div class="input-group col-md-2">
					<input type="number" class="form-control" id="weight_qa" step="0.5">
				</div>
			</div>
			<br>
			<div class="form-inline">
				<label for="abr_score" class="col-sm-12 col-md-2">Score Rule</label>
				<label for="desc_score" class="col-sm-12 col-md-7">Description</label>
				<label for="score" class="col-sm-12 col-md-2">Score: 50%</label>
			</div>
			<div class="row">
				<div class="input-group col-md-2">
					<input type="text" class=" form-control" id="abr_score">
				</div>
				<div class="input-group col-md-7">
					<input type="text" class=" form-control" id="desc_score">
				</div>
				<div class="input-group col-md-2">
					<input type="range" min="0" max="100" class="form-control" id="score" step="0.5">
				</div>
				<button class="btn btn-success" type="button"><span class="fas fa-plus"></span></button>
			</div>
			<br>
			<table id="table_qa" class="table table-responsive">
				<caption>List of Question Quality</caption>
				<thead>
				<tr>
					<th>ID</th>
					<th>Description</th>
					<th>Scores Rules</th>
					<th>Weight</th>
					<th>Minimum to Approve</th>
					<th>Delete</th>
				</tr>
				</thead>
				<tr>
					<td contenteditable="true">QA1</td>
					<td contenteditable="true">Descrição</td>
					<td>
						<table class="table table-responsive">
							<thead>
							<th>Score Rule</th>
							<th>Description</th>
							<th>Score</th>
							<th>Delete</th>
							</thead>
							<tbody>
							<tr>
								<td contenteditable="true">Nova</td>
								<td contenteditable="true">Descrição</td>
								<td>
									<div class="form-inline">
										50%
										<input type="range" min="0" max="100" class="form-control" id="edit_score"
											   step="0.5">
									</div>
								</td>
								<td>
									<button class="btn btn-danger"><span class="far fa-trash-alt"></span></button>
								</td>
							</tr>
							<tr>
								<td contenteditable="true">Nova</td>
								<td contenteditable="true">Descrição</td>
								<td>
									<div class="form-inline">
										50%
										<input type="range" min="0" max="100" class="form-control" id="edit_score"
											   step="0.5">
									</div>
								</td>
								<td>
									<button class="btn btn-danger"><span class="far fa-trash-alt"></span></button>
								</td>
							</tr>
							<tr>
								<td contenteditable="true">Nova</td>
								<td contenteditable="true">Descrição</td>
								<td>
									<div class="form-inline">
										50%
										<input type="range" min="0" max="100" class="form-control" id="edit_score"
											   step="0.5">
									</div>
								</td>
								<td>
									<button class="btn btn-danger"><span class="far fa-trash-alt"></span></button>
								</td>
							</tr>
							</tbody>
						</table>
					</td>
					<td>
						<input type="number" class="form-control" id="edit_qa_weight" step="0.5" value="5">
					</td>
					<td>
						<select class="form-control" id="min_score_to_qa">
							<option>Nova</option>
							<option>Ruim</option>
							<option>Bom</option>
						</select>
					</td>
					<td>
						<button class="btn btn-danger"><span class="far fa-trash-alt"></span></button>
					</td>
				</tr>
				<tr>
					<td contenteditable="true">QA1</td>
					<td contenteditable="true">Descrição</td>
					<td>
						<table class="table table-responsive">
							<thead>
							<th>Score Rule</th>
							<th>Description</th>
							<th>Score</th>
							<th>Delete</th>
							</thead>
							<tbody>
							<tr>
								<td contenteditable="true">Nova</td>
								<td contenteditable="true">Descrição</td>
								<td>
									<div class="form-inline">
										50%
										<input type="range" min="0" max="100" class="form-control" id="edit_score""
										step="0.5">
									</div>
								</td>
								<td>
									<button class="btn btn-danger"><span class="far fa-trash-alt"></span></button>
								</td>
							</tr>
							<tr>
								<td contenteditable="true">Nova</td>
								<td contenteditable="true">Descrição</td>
								<td>
									<div class="form-inline">
										50%
										<input type="range" min="0" max="100" class="form-control" id="edit_score"
											   step="0.5">
									</div>
								</td>
								<td>
									<button class="btn btn-danger"><span class="far fa-trash-alt"></span></button>
								</td>
							</tr>
							<tr>
								<td contenteditable="true">Nova</td>
								<td contenteditable="true">Descrição</td>
								<td>
									<div class="form-inline">
										50%
										<input type="range" min="0" max="100" class="form-control" id="edit_score"
											   step="0.5">
									</div>
								</td>
								<td>
									<button class="btn btn-danger"><span class="far fa-trash-alt"></span></button>
								</td>
							</tr>
							</tbody>
						</table>
					</td>
					<td>
						<input type="number" class="form-control" id="edit_qa_weight" step="0.5" value="5">
					</td>
					<td>
						<select class="form-control" id="min_score_to_qa">
							<option>Nova</option>
							<option>Ruim</option>
							<option>Bom</option>
						</select>
					</td>
					<td>
						<button class="btn btn-danger"><span class="far fa-trash-alt"></span></button>
					</td>
				</tr>
				<tbody>
				</tbody>
			</table>
			<br>
			<div class="form-inline container justify-content-between">
				<a class="btn btn-secondary"><span class="fas fa-backward"></span> Previous</a>
				<a class="btn btn-secondary">Next <span class="fas fa-forward"></span></a>
			</div>
		</div>
		<div class="tab-pane container" id="tabdata">
			<label for="id_qa"><strong>Data Extraction</strong></label>
			<div class="form-inline">
				<label for="id_qa" class="col-sm-12 col-md-2">ID</label>
				<label for="id_qa" class="col-sm-12 col-md-7">Description</label>
				<label for="qa_description" class="col-sm-12 col-md-2">Type of Data</label>
			</div>
			<div class="row">
				<div class="input-group col-md-2">
					<input type="text" class=" form-control" id="id_data_extraction">
				</div>
				<div class="input-group col-md-7">
					<input type="text" class=" form-control" id="desc_data_extraction">
				</div>
				<div class="input-group col-md-2">
					<select class="form-control" id="type_data_extraction">
						<option>Text</option>
						<option>List</option>
					</select>
				</div>
				<button class="btn btn-success" type="button"><span class="fas fa-plus"></span></button>
			</div>
			<br>
			<table id="table_data_extraction" class="table table-responsive-sm">
				<caption>List of Data Extraction</caption>
				<thead>
				<tr>
					<th>ID</th>
					<th>Description</th>
					<th>Type</th>
					<th>Options</th>
					<th>Delete</th>
				</tr>
				</thead>
				<tbody>
				<tr>
					<td contenteditable="true">ID</td>
					<td contenteditable="true">Description</td>
					<td>
						<select class="form-control">
							<option>Text</option>
							<option>List</option>
						</select>
					</td>
					<td>
						<div class="row">
							<div class="input-group col-sm-12 opt">
								<input type="text" class="form-control" id="edit_opt" value="Option">
								<div class="input-group-append">
									<button class="btn btn-danger" type="button">
										<span class="far fa-trash-alt"></span></button>
								</div>
							</div>
							<div class="input-group col-sm-12 opt">
								<input type="text" class="form-control" placeholder="Add a Option to Question"
									   id="add_options">
								<div class="input-group-append">
									<button class="btn btn-success" type="button"><span class="fas fa-plus"></span>
									</button>
								</div>
							</div>
						</div>
					</td>
					<td>
						<button class="btn btn-danger"><span class="far fa-trash-alt"></span></button>
					</td>
				</tr>
				<tr>
					<td contenteditable="true">ID</td>
					<td contenteditable="true">Description</td>
					<td>
						<select class="form-control">
							<option>Text</option>
							<option>List</option>
						</select>
					</td>
					<td>
					</td>
					<td>
						<button class="btn btn-danger"><span class="far fa-trash-alt"></span></button>
					</td>
				</tr>
				</tbody>
			</table>
			<br>
			<div class="form-inline container justify-content-between">
				<a class="btn btn-secondary"><span class="fas fa-backward"></span> Previous</a>
				<a class="btn btn-secondary">Next <span class="fas fa-forward"></span></a>
			</div>
		</div>
	</div>
	<br>
</div>
