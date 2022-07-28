<div class="form-group">
	<label for="title"><?php echo t('title');?></label>
	<input name="title" type="text" id="title" class="form-control" value="<?php echo get_form_value('title',isset($title) ? $title : ''); ?>"/>
</div>

<?php echo form_author_field("author",'Author(s)'); ?>

<div class="content edit-report-section  top-margin-10">
	<div class="row">
    <table border="0" class="padding-table-rt">
	<tr>
    <td width="15%">
		
	
        <label for="edition"><?php echo t('edition');?></label>
        <input name="edition" type="text" id="editon" size="50" class="form-control"  value="<?php echo get_form_value('edition',isset($edition) ? $edition: ''); ?>"/>
    
    </td>
    <td width="15%">
	
        <label for="volume"><?php echo t('volume');?></label>
        <input name="volume" type="text" id="volume" size="50" class="form-control" value="<?php echo get_form_value('volume',isset($volume) ? $volume : ''); ?>"/>
    
    </td>

	
    <td width="30%">
        <label><?php echo t('publication_day_month_year');?></label>
                <div class="row publications">
                    <div class="col-md-2">
                <input name="pub_day" class="form-control" type="text" maxlength="2" size="2" value="<?php echo get_form_value('pub_day',isset($pub_day) ? $pub_day: ''); ?>"/></div>
                    <div class="col-md-1">&nbsp;-&nbsp;</div>
                    <div class="col-md-5"><input name="pub_month" type="text" class="form-control" maxlength="20"  size="10" value="<?php echo get_form_value('pub_month',isset($pub_month) ? $pub_month: ''); ?>"/></div>
                    <div class="col-md-1">&nbsp;-&nbsp;</div>
                    <div class="col-md-1">
                <input name="pub_year" type="text" class="form-control" size="2" maxlength="4"  value="<?php echo get_form_value('pub_year',isset($pub_year) ? $pub_year: ''); ?>"/></div>
                </div>    
        </td>
    
    <td width="30%">
    
        <label for="idnumber"><?php echo t('periodical_number');?></label>
        <input name="idnumber" type="text" id="idnumber" size="10" maxlength="45" class="form-control" value="<?php echo get_form_value('idnumber',isset($idnumber) ? $idnumber: ''); ?>"/>
    
    </td>

</tr>
</table>
</div>
</div>
<div class="content edit-report-section  top-margin-10">
	<div class="row">
    <table border="0" class="padding-table-rt">
	<tr>    
    <td>
    
        <label for="publisher"><?php echo t('publisher');?></label>
        <input name="publisher" type="text" id="publisher" size="50" class="form-control" value="<?php echo get_form_value('publisher',isset($publisher) ? $publisher : ''); ?>"/>
    
    </td>
    <td>
    
        <label for="place_publication"><?php echo t('publication_city');?></label>
        <input name="place_publication" type="text" id="place_publication" size="50" class="form-control" value="<?php echo get_form_value('place_publication',isset($place_publication) ? $place_publication : ''); ?>"/>
    
    </td>
    <td>
    
        <label for="place_state"><?php echo t('publication_state_country');?></label>
        <input name="place_state" type="text" id="place_state" size="50" class="form-control" value="<?php echo get_form_value('place_state',isset($place_state) ? $place_state : ''); ?>"/>
    
    </td>
    </tr>
</table>
</div>
</div>


<div class="row top-margin-10 bottom-margin-10">
	<label for="url"><?php echo t('url');?></label>
	<input name="url" type="text" id="url" size="50" class="form-control"  value="<?php echo get_form_value('url',isset($url) ? $url : ''); ?>"/>
</div>
