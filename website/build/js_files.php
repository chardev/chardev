<?php
	$js_files = array(
		 "js/Chardev.js",
		 "js/Engine.js",
	
		 "js/common/Ajax.js",
		 "js/common/Ajax2.js",
		 "js/common/Globals.js",
		 "js/common/Handler.js",
		 "js/common/Listener.js",
		 "js/common/TextIO.js",
		 "js/common/Tools.js",
		 "js/common/GameInfo.js",
		 "js/common/LinkedList.js",
		 "js/common/Compression.js",
		 "js/common/NotImplementedException.js",
		 "js/common/IllegalArgumentException.js",
		
		 "js/events/GenericEvent.js",
		 "js/events/GenericSubject.js",
		 "js/events/GenericObserver.js",

		 "js/engine/CharacterIO.js",
		 "js/engine/DatabaseIO.js",
		
		 "js/engine/entities/Buff.js",
		 "js/engine/entities/Glyph.js",
		 "js/engine/entities/Item.js",
		 "js/engine/entities/Profession.js",
		 "js/engine/entities/Shapeform.js",
		 "js/engine/entities/SkillLine.js",
		 "js/engine/entities/SkillLineAbility.js",
		 "js/engine/entities/Spell.js",
		 "js/engine/entities/SpellItemEnchantment.js",
		 "js/engine/entities/Talent.js",
		
		 "js/engine/entities/spell/SpellEffect.js",
		 "js/engine/entities/spell/SpellEquippedItems.js",
		 "js/engine/entities/spell/SpellScaling.js",
		 "js/engine/entities/spell/SpellShapeshift.js",
		 "js/engine/entities/spell/SpellAuraOptions.js",
		 "js/engine/entities/spell/SpellClassOptions.js",
		 "js/engine/entities/spell/SpellLevels.js",
		
		 "js/engine/entities/item/Exceptions.js",
		 "js/engine/entities/item/GemProperties.js",
		 "js/engine/entities/item/ItemRandomEnchantment.js",
		 "js/engine/entities/item/ItemRandomProperty.js",
		 "js/engine/entities/item/ItemRandomSuffix.js",
		 "js/engine/entities/item/ItemSet.js",
		
		
		 "js/engine/container/Auras.js",
		 "js/engine/container/Buffs.js",
		 "js/engine/container/Inventory.js",
		 "js/engine/container/Talents.js",
		 "js/engine/container/CharacterManager.js",
		
		 "js/engine/character/Character.js",
		 "js/engine/character/CharacterRace.js",
		 "js/engine/character/CharacterClass.js",
		 "js/engine/character/Stats.js",
		
		 "js/engine/cache/ItemCache.js",
		 "js/engine/cache/SpellCache.js",
		
		
		 "js/gui/DOM.js",
		 "js/gui/Gui.js",
			
		 "js/gui/static/FormValidator.js",
		 "js/gui/static/UserInformation.js",
		 "js/gui/static/AvatarPicker.js",
		
		 "js/gui/tooltip/ItemTooltip.js",
		 "js/gui/tooltip/SpellTooltip.js",
		 "js/gui/tooltip/Tooltip.js",
		 "js/gui/tooltip/StatTooltip.js",
		 "js/gui/tooltip/TalentTooltip.js",
		
		 "js/gui/character_sheet/BuffBar.js",
		 "js/gui/character_sheet/CharacterSheet.js",
		 "js/gui/character_sheet/ItemSlot.js",
		 "js/gui/character_sheet/PresenceSelector.js",
		 "js/gui/character_sheet/RaceClassSelector.js",
		 "js/gui/character_sheet/ShapeSelector.js",
		 "js/gui/character_sheet/Stat.js",
		
		 "js/gui/widgets/SimpleUserControl.js",
		 "js/gui/widgets/Input.js",
		 "js/gui/widgets/SingleSelect.js",
		
		 "js/gui/widgets/MultiSelect.js",
		 "js/gui/widgets/StaticGrid.js",
		 "js/gui/widgets/Collapsable.js",
		 "js/gui/widgets/LayeredDiv.js",
		 "js/gui/widgets/TabFolder.js",
		 "js/gui/widgets/Menu.js",
		 "js/gui/widgets/StackedDiv.js",
		 "js/gui/widgets/FilterableCollection.js",
		 "js/gui/widgets/BatchOperations.js",
		
		 "js/gui/widgets/editable/Editable.js",
		 "js/gui/widgets/editable/InputEditable.js",
		 "js/gui/widgets/editable/SelectEditable.js",
		 "js/gui/widgets/editable/BattleNetProfileEditable.js",
		 "js/gui/widgets/editable/PostEditable.js",
		
		 "js/gui/components/SocketInterface.js",
		 "js/gui/components/ReforgeInterface.js",
		 "js/gui/components/ReforgeSummary.js",
		 "js/gui/components/GlyphInterface.js",
		 "js/gui/components/RandomPropertyInterface.js",
		 "js/gui/components/ImportInterface.js",
		 "js/gui/components/SaveInterface.js",
		 "js/gui/components/BuffInterface.js",
		 "js/gui/components/Overview.js",
		
		
		 "js/adapter/CharacterCharacterSheetAdapter.js",
		 "js/adapter/EngineGuiAdapter.js",
		 "js/adapter/TalentsAdapter.js",
		 "js/adapter/static/ProfilesAdapter.js",
		 "js/adapter/facades/EquippedItem.js",
		 "js/adapter/facades/SocketedGem.js",
		 "js/adapter/facades/AvailableItemRandomEnchantment.js",
		 "js/adapter/facades/TalentsFacade.js",
		 "js/adapter/facades/TalentTreeFacade.js",
		 "js/adapter/facades/TalentFacade.js",
		 "js/adapter/facades/SpellFacade.js",
		 "js/adapter/facades/GlyphFacade.js",
		 "js/adapter/facades/CharacterFacade.js",
		 "js/adapter/facades/AvailableBuff.js",
		 "js/adapter/facades/AvailableShapeform.js",
		 "js/adapter/facades/AvailablePresence.js",
		 "js/adapter/facades/ActiveBuff.js",
		
		 "js/gui/list/filter/AbstractFilter.js",
		 "js/gui/list/filter/FilterData.js",
		 "js/gui/list/filter/FilterManager.js",
		 "js/gui/list/filter/InputFilter.js",
		 "js/gui/list/filter/RangeInputFilter.js",
		 "js/gui/list/filter/SingleSelectFilter.js",
		 "js/gui/list/filter/MultiSelectFilter.js",
		
		 "js/gui/list/List.js",
		 "js/gui/list/ListGui.js",
		 "js/gui/list/CustomFilter.js",
		 "js/gui/list/ListBackEndProxy.js",
		
		 "js/gui/list/item_list/ItemList.js",
		 "js/gui/list/item_list/ItemListGui.js",
		 "js/gui/list/spell_list/SpellList.js",
		 "js/gui/list/spell_list/SpellListGui.js",
		 "js/gui/list/profile_list/ProfileList.js",
		 "js/gui/list/profile_list/ProfileListGui.js",
		 "js/gui/list/set_list/SetList.js",
		 "js/gui/list/set_list/SetListGui.js",
		
		
		 "js/gui/talents/TalentsGui.js",
		 "js/gui/talents/TalentIcon.js"
	);
	
	$js_extern_files  = array(
		 "js/common/extern/json2.js",
		 "js/common/extern/md5.js"
	);
?>