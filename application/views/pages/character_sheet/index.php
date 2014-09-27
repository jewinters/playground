<? $this->load->view('layout/header'); ?>
<div id="sheet">
	<div id="header" class="col-12">
		<div id="name" class="panel col-4">
			Name <input name="character_name" class="text"/>
		</div>
		<div id="details" class="panel col-8">
			<div id="class_panel" class="col-4">
				<div class="col-2">Class</div>
				<select class="col-6" id="classes">
				<? foreach($classes as $class) { ?>
					<option value="<?= $class->name; ?>"><?= $class->name; ?></option>
				<? } ?>
				</select>
				<div class="col-2 center">Level</div>
				<input class="col-2 level" type="number" name="quantity" min="1" max="20" value="1"/>
			</div>
			<div class="col-4">Background <input name="background" class="text"/></div>
			<div class="col-4">Player Name <input name="player_name" class="text"/></div>
			<div class="col-4">Race 
				<select id="races">
				<? foreach($races as $race) { ?>
					<option value="<?= $race->name; ?>"><?= $race->name; ?></option>
				<? } ?>
				</select>
			</div>
			<div class="col-4">Alignment
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
			</div>
			<div class="col-4">Experience Points <input type="number" value="0" class="experience text" name="experience_points"/></div>
		</div>
	</div>
	<div class="col-12">
		<div class="col-4"> <!--Left Column-->
			<div id="stats" class="panel col-4">
				<div id="base_stats" class="h4 center">Base Stats</div>
				<? foreach($core_stats as $stat) { ?>
				<div id="stat_<?= $stat->code; ?>">
					<div class="center col-12"><?= $stat->name ?></div>
					<div class="center col-6">
						<input type="number" class="center" id="stat_<?= $stat->code; ?>_value" name="quantity" min="1" max="30" value="10"/>
					</div>
					<div class="center col-6">
						<input type="number" class="center" id="stat_<?= $stat->code; ?>_modifier" min="-5" max="10" value="0" disabled="disabled"/>
					</div>
				</div>
				<? } ?>
			</div>
			<div class="col-8">
				<div id="inspiration" class="panel col-12">
					<div class="col-8 text-center">Inspiration</div>
					<div class="col-4">
						<div class="center checkboxRadio">
							<input type="checkbox" id="inspiration_value"/>
							<label for="inspiration_value"/>
						</div>
					</div>
				</div>
				<div id="proficiency_bonus" class="panel col-12">
					<div class="col-9 center">Proficiency Bonus</div>
					<input name="proficiency_bonus" type="number" min="2" max="6" value="2"/>
				</div>
				<div id="saving_throws" class="panel col-12">
					<div class="center h5">Saving Throws</div>
					<? foreach($core_stats as $stat) { ?>
					<div id="stat_<?= $stat->code; ?>">
						<div class="col-6 input-ti text-right"><?= $stat->name ?></div>
						<div class="col-1">
							<div class="center checkboxRadio">
								<input type="checkbox" id="save_<?= $stat->code; ?>_proficiency" name=""/>
								<label for="save_<?= $stat->code; ?>_proficiency"/>
							</div>
						</div>
						<input id="save_<?= $stat->code; ?>_value" type="number" value="0" class="col-5 input-sm"/>
					</div>
					<? } ?>
				</div>
				<div id="skills" class="panel col-12">
					<div class="center h5">Skills</div>
					<? foreach($skills as $skill) { ?>
					<div id="skill_<?= $skill->name; ?>">
						<div class="col-6 input-ti"><?= $skill->name ?> (<?= $skill->stat ?>)</div>
						<div class="col-1">
							<div class="center checkboxRadio">
								<input type="checkbox" id="skill_<?= $skill->name; ?>_proficiency" name=""/>
								<label for="skill_<?= $skill->name; ?>_proficiency"/>
							</div>
						</div>
						<input id="skill_<?= $skill->name; ?>_value" type="number" value="0" class="input-sm"/>
					</div>
					<? } ?>
				</div>
			</div>
			<div id="passive_perception" class="panel col-12">
				<div class="col-8">Passive Wisdom (Perception)</div><input name="passive_perception" type="number" value="0"/>
			</div>
			<div id="other_proficiencies_languages" class="panel col-12">
				Other Proficiencies & Languages <textarea name="other_proficiencies_languages"/></textarea>
			</div>
		</div>
		<div class="col-4"> <!--Middle Column-->
			<div id="common_stats" class="col-12">
				<div id="working_stats">
					<div class="col-12">
						<div id="armor_class" class="panel col-4">
							<div class="center">Armor Class</div><div class="center"><input type="number" value="10" name="armor_class"/></div>
						</div>
						<div id="initiative" class="panel col-4">
							<div class="center">Initiative</div><div class="center"><input type="number" value="0" name="initiative"/></div>
						</div>
						<div id="speed" class="panel col-4">
							<div class="center">Speed</div><div class="center"><input type="number" value="30" name="speed"/></div>
						</div>
					</div>
					<div id="current_hitpoints" class="panel col-12">
						<div class="center">Current Hitpoints</div><textarea type="number" name="current_hitpoints"></textarea>
					</div>
					<div id="temporary_hitpoints" class="panel col-12">
						<div class="center">Temporary Hitpoints</div><textarea type="number" name="temporary_hitpoints"></textarea>
					</div>
					<div id="hit_dice" class="panel col-6">
						<div class="center">Hit Dice</div>
						<div id="hit_dice_total">
							<div class="col-7 center">Total</div>
							<input type="number" value="1" min="0" name="hit_dice_total"/>
						</div>
						<div id="hit_dice_current">
							<input class="col-12 text" name="hit_dice"/>
						</div>
					</div>
					<div id="death_saves" class="panel col-6">
						<div class="center">Death Saves</div>
						<div id="death_save_successes">
							<div class="col-8">Successes</div>
							<div class="col-4">
								<div class="col-4">
									<div class="center checkboxRadio">
										<input type="checkbox" class="col-4" id="death_save_success_1"/>
										<label for="death_save_success_1"/>
									</div>
								</div>
								<div class="col-4">
									<div class="center checkboxRadio">
										<input type="checkbox" class="col-4" id="death_save_success_2"/>
										<label for="death_save_success_2"/>
									</div>
								</div>
								<div class="col-4">
									<div class="center checkboxRadio">
										<input type="checkbox" class="col-4" id="death_save_success_3"/>
										<label for="death_save_success_3"/>
									</div>
								</div>
							</div>
						</div>
						<div id="death_save_failures">
							<div class="col-8">Failures</div>
							<div class="col-4">
								<div class="col-4">
									<div class="center checkboxRadio">
										<input type="checkbox" id="death_save_failure_1"/>
										<label for="death_save_failure_1"/>
									</div>
								</div>
								<div class="col-4">
									<div class="center checkboxRadio">
										<input type="checkbox" id="death_save_failure_2"/>
										<label for="death_save_failure_2"/>
									</div>
								</div>
								<div class="col-4">
									<div class="center checkboxRadio">
										<input type="checkbox" id="death_save_failure_3"/>
										<label for="death_save_failure_3"/>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div id="attacks" class="panel col-12">
				<div class="center">Attacks</div>
				<div id="attack_header" class="col-12">
					<div class="col-4 center">Name</div>
					<div class="col-2 center">Atk Bonus</div>
					<div class="col-2 center">Damage</div>
					<div class="col-4 center">Type</div>
				</div>
				<div id="primary_attack" class="col-12">
					<input class="col-4 text" name="primary_attack_name"/>
					<div class="center col-2">
						<input type="number" name="primary_attack_bonus"/>
					</div>
					<input class="col-2 text" name="primary_attack_damage"/>
					<select class="col-4" id="primary_attack_type">
					<? foreach( $damage_types as $damage_type ) { ?>
						<option name='<?= $damage_type->name ?>'><?= $damage_type->name ?></option>
					<? } ?>
					</select>
				</div>
				<div id="secondary_attack" class="col-12">
					<input class="col-4 text" name="secondary_attack_name"/>
					<div class="center col-2">
						<input type="number" name="secondary_attack_bonus"/>
					</div>
					<input class="col-2 text" name="secondary_attack_damage"/>
					<select class="col-4" id="secondary_attack_type">
					<? foreach( $damage_types as $damage_type ) { ?>
						<option name='<?= $damage_type->name ?>'><?= $damage_type->name ?></option>
					<? } ?>
					</select>
				</div>
				<div id="tertiary_attack" class="col-12">
					<input class="col-4 text" name="tertiary_attack_name"/>
					<div class="center col-2">
						<input type="number" name="tertiary_attack_bonus"/>
					</div>
					<input class="col-2 text" name="tertiary_attack_damage"/>
					<select class="col-4" id="tertiary_attack_type">
					<? foreach( $damage_types as $damage_type ) { ?>
						<option name='<?= $damage_type->name ?>'><?= $damage_type->name ?></option>
					<? } ?>
					</select>
				</div>
			</div>
			<div id="equipment" class="panel col-12">
				Equipment <textarea class="tall" name="equipment"/></textarea>
			</div>
			<div id="money" class="panel col-12">
				CP <input type="number" name="money_copper" value="0"/>
				SP <input type="number" name="money_silver" value="0"/>
				EP <input type="number" name="money_electrum" value="0"/>
				GP <input type="number" name="money_gold" value="0"/>
				PP <input type="number" name="money_platinum" value="0"/>
			</div>
		</div>
		<div class="col-4"> <!--Right Column-->
			<div id="personality" class="panel col-12">
				<div id="personality_traits">
					Personality Traits <textarea class="med" name="personality_traits"></textarea>
				</div>
				<div id="ideals">
					Ideals <textarea class="med" name="ideals"/></textarea>
				</div>
				<div id="bonds">
					Bonds <textarea class="med" name="bonds"/></textarea>
				</div>
				<div id="flaws">
					Flaws <textarea class="med" name="flaws"/></textarea>
				</div>
			</div>
			<div id="features_traits" class="panel col-12">
				Features & Traits <textarea class="tall" name="features_traits"/></textarea>
			</div>
		</div>
	</div>
</div>
<? $this->load->view('layout/footer'); ?>
