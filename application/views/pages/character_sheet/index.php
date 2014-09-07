<? $this->load->view('layout/header'); ?>
<div id="sheet">
	<div id="header">
		<div id="name">
			Name: <input name="character_name"/>
		</div>
		<div id="details">
			Class & Level:
			<select id="classes">
			<? foreach($classes as $class) { ?>
				<option value="<?= $class->name; ?>"><?= $class->name; ?></option>
			<? } ?>
			</select>
			<select id="level">
			<? foreach( range(1,20) as $level ) { ?>
				<option value="<?= $level; ?>"><?= $level; ?></option>
			<? } ?>
			</select>
			Background: <input name="background"/>
			Player Name: <input name="player_name"/>
			Race: 
			<select id="races">
			<? foreach($races as $race) { ?>
				<option value="<?= $race->name; ?>"><?= $race->name; ?></option>
			<? } ?>
			Alignment:
			<select id="alignments">
				<option value="LG">Lawful Good</option>
				<option value="LN">Lawful</option>
				<option value="LE">Lawful Evil</option>
				<option value="NG">Good</option>
				<option value="NN">True Neutral</option>
				<option value="NE">Evil</option>
				<option value="CG">Chaotic Good</option>
				<option value="CN">Chaotic</option>
				<option value="CE">Chaotic Evil</option>
			</select>
			Experience Points: <input name="experience_points"/>
		</div>
		<div id="stats">
			Base Stats:
			<? foreach($core_stats as $stat) { ?>
			<div id="stat_<?= $stat->code; ?>">
				<?= $stat->name ?>:
				<select id="stat_<?= $stat->code; ?>_value">
				<? foreach( range(1, 30) as $value ) { ?>
					<option value='<?= $value; ?>'<?php echo $value==10 ? ' selected=\'selected\'' : ''; ?>>
						<?= $value; ?>
					</option>
				<? } ?>
				</select>
			<? } ?>
		</div>
		<div id="inspiration">
			Inspiration: <input type='checkbox' name="inspiration"/>
		</div>
		<div id="proficiency_bonus">
			Proficiency Bonus: <input name="proficiency_bonus"/>
		</div>
		<div id="saving_throws">
			Saving Throws:
			<? foreach($core_stats as $stat) { ?>
			<div id="stat_<?= $stat->code; ?>">
				<?= $stat->name ?>: <input type="checkbox" id="save_<?= $stat->code; ?>_proficiency"/><input id="save_<?= $stat->code; ?>_value"/>
			</div>
			<? } ?>
		</div>
		<div id="skills">
			Skills:
			<? foreach($skills as $skill) { ?>
			<div id="skill_<?= $skill->name; ?>">
				<?= $skill->name ?> (<?= $skill->stat ?>): <input type="checkbox" id="skill_<?= $skill->name; ?>_proficiency"/><input id="skill_<?= $skill->name; ?>_value"/>
			</div>
			<? } ?>
		</div>
		<div id="working_stats">
			<div id="armor_class">
				Armor Class: <input name="armor_class"/>
			</div>
			<div id="initiative">
				Initiative: <input name="initiative"/>
			</div>
			<div id="speed">
				Speed: <input name="speed"/>
			</div>
			<div id="current_hitpoints">
				Current Hitpoints: <input name="current_hitpoints"/>
			</div>
			<div id="temporary_hitpoints">
				Temporary Hitpoints: <input name="temporary_hitpoints"/>
			</div>
			<div id="hit_dice">
				Hit Dice:
				<div id="hit_dice_total">
					Total: <input name="hit_dice_total"/>
				</div>
				<div id="hit_dice_current">
					<input name="hit_dice"/>
				</div>
			</div>
			<div id="death_saves">
				Death Saves:
				<div id="death_save_successes">
					Successes: <input name="death_save_successes"/>
				</div>
				<div id="death_save_failures">
					Failures: <input name="death_save_failures"/>
				</div>
			</div>
		</div>
		<div id="personality_traits">
			Personality Traits: <input name="personality_traits"/>
		</div>
		<div id="ideals">
			Ideals: <input name="ideals"/>
		</div>
		<div id="bonds">
			Bonds: <input name="bonds"/>
		</div>
		<div id="flaws">
			Flaws: <input name="flaws"/>
		</div>
		<div id="passive_perception">
			Passive Perception: <input name="passive_perception"/>
		</div>
		<div id="other_proficiencies_languages">
			Other Proficiencies & Languages: <input name="other_proficiencies_languages"/>
		</div>
		<div id="attacks">
			Attacks:
			<div id="primary_attack">
				Primary:
				<div id="primary_attack_name">
					Name: <input name="primary_attack_name"/>
				</div>
				<div id="primary_attack_bonus">
					Attack Bonus: <input name="primary_attack_bonus"/>
				</div>
				<div id="primary_attack_damage_type">
					Damage Type: <input name="primary_attack_damage_type"/>
				</div>
			</div>
			<div id="secondary_attack">
				Secondary:
				<div id="secondary_attack_name">
					Name: <input name="secondary_attack_name"/>
				</div>
				<div id="secondary_attack_bonus">
					Attack Bonus: <input name="secondary_attack_bonus"/>
				</div>
				<div id="secondary_attack_damage_type">
					Damage Type: <input name="secondary_attack_damage_type"/>
				</div>
			</div>
			<div id="tertiary_attack">
				Tertiary:
				<div id="tertiary_attack_name">
					Name: <input name="tertiary_attack_name"/>
				</div>
				<div id="tertiary_attack_bonus">
					Attack Bonus: <input name="tertiary_attack_bonus"/>
				</div>
				<div id="tertiary_attack_damage_type">
					Damage Type: <input name="tertiary_attack_damage_type"/>
				</div>
			</div>
		</div>
		<div id="equipment">
			Equipment: <input name="equipment"/>
		</div>
		<div id="money">
			CP: <input name="money_copper"/>
			SP: <input name="money_silver"/>
			EP: <input name="money_electrum"/>
			GP: <input name="money_gold"/>
			PP: <input name="money_platinum"/>
		</div>
		<div id="features_traits">
			Features & Traits: <input name="features_traits"/>
		</div>
	</div>
</div>
<? $this->load->view('layout/footer'); ?>
