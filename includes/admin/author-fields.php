<?php 

function ju_custom_user_profile_fields(){
	?>
	<table class="form-table">
		<tr>
			<th>
				<label for="ju_twitter"><?php _e( 'Twitter', 'udemy' ); ?></label>
			</th>
			<td>
				<input type="text" name="ju_twitter" id="ju_twitter" class="regular-text"
						value="<?php echo esc_attr( get_the_author_meta( 'ju_twitter', $user->ID ); ) ?>"/>
			</td>
		</tr>
	</table>
}