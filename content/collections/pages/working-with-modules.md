title: 'Working With Modules'
body:
  -
    type: text
    text: '<h1>WORKING WITH MODULES</h1><p>Here we’ll cover the nuts and bolts of working with modules (but unlike a hardware modular synth, no actual nuts or bolts are involved). Before we discuss the big library tab you see on-screen, we''ll take a short detour to discuss module categories.</p><h3><strong>Module Type Categories</strong></h3><p>All modules are assigned to one of the following categories when programmed:</p><ul><li><strong><em>Source</em></strong>- oscillators, noise generators, anything that makes a sound.</li><li><strong><em>Processors</em></strong>- filters, waveshapers, EQ''s, things that alter sound.<em></em></li><li><strong><em>Controller</em></strong>- envelope generators, sequencers, keyboards. <br><em></em></li><li><strong><em>Utility</em></strong>- mixers, gates, multipliers, amplifiers, etc.<em></em></li><li><strong><em>Effect</em></strong>- traditional audio effects such as reverb, delay, chorus, distortion.</li></ul><p>These categories affect how Voltage Modular handles processing internally. Modules may be sorted according to their category (see all the sort criteria below).<br></p><h3>The Modules Library Tab</h3><p>The library <em>Modules</em>&nbsp;tab displays displays all modules currently owned by the logged-in user (aka, you).<strong> This is where you''ll go to add new modules to patch, either by clicking <em>Add</em>, or by dragging-and-dropping to a cabinet.</strong></p>'
  -
    type: image
    image:
      - /assets/ug_cab_moduleinlib.jpg
    alignment: left
  -
    type: text
    text: '<p>Each module in the library displays the following:</p><ul><li>Module Name<br></li><li>Thumbnail Image<br></li><li>Category<br></li><li>Manufacturer<br></li><li>Add button<br></li><li>Favorite Star- The star above the <em>Add</em> button turns yellow when a module is favorited. The <em>Favorites</em> tag can be enabled or disabled by clicking on the star and can be used as a sort criteria (see following section for more info).<br></li></ul><h4>Search, Sort, and Filtering<br></h4><p>These are the fields and buttons above the module list. <br></p><p><em>Search</em>- This super-handy field lets you search for modules by typing a few letters of the module name. For example, typing “LFO” would display the LFO and MiniLFO modules. The search field can be initialized by clicking the <em>X</em>&nbsp;icon.</p>'
  -
    type: image
    image:
      - /assets/screenshots/ug_modulelistgrid.jpg
    alignment: left
  -
    type: text
    text: '<p><em>Graphic/List View Select</em>- This little guy is easy to miss, but clicking it toggles between graphic+name or name-only in the module list.</p>'
  -
    type: image
    image:
      - /assets/screenshots/ug_modulelistsort.jpg
    alignment: left
  -
    type: text
    text: '<p><em>Sort</em>- This drop-down menu allows sorting of the module list by name, category (more on this below), date acquired (as in, “show me my new stuff!”), or the company that made the module.<em><br></em></p><ul><li><em>Name</em>- Sorts all modules alphabetically from A-Z or Z-A. <br></li><li><em>Category</em>- Sorts categories alphabetically.</li><li><em>Date Acquired</em>- Signal modules according to date of purchase.<br></li><li><em>Manufacturer</em>- Sorts alphabetically by the company that made the module. </li></ul>'
  -
    type: image
    image:
      - /assets/screenshots/ug_modulelistfilter.jpg
    alignment: left
  -
    type: text
    text: '<p><em>Filter</em>- Allows filtering of which modules are displayed using descriptive headings.</p><ul><li><em>None</em>- Shows all currently owned modules with no separate headings.&nbsp;</li><li><em>Category</em>- Divides up modules by their categories. This is the default filter setting. <br></li><li><em>Manufacturer</em>- Sorts alphabetically by the company that made the module. <br></li><li><em>Name</em>- Sorts modules alphabetically. <br></li></ul>'
  -
    type: image
    image:
      - /assets/screenshots/ug_modulelistfiltersel.jpg
    alignment: left
  -
    type: text
    text: '<p>Module view filters can also be selected by clicking on individual categories.&nbsp;<br></p>'
  -
    type: image
    image:
      - /assets/screenshots/ug_modulelistrefresh.jpg
    alignment: left
  -
    type: text
    text: '<p><em>Refresh</em>- Voltage Modular automatically downloads new modules or presets each time it’s launched. The <em>Refresh</em>&nbsp;button checks for new content while Voltage Modular is running; this is particularly useful for developers who are frequently revising modules.</p><h3><strong>Module Library Right-Click Functions</strong><br></h3><p><em>Add To Cabinet</em>- This adds a module to a cabinet (though it''s usually easier to drag and drop the module). <br></p>'
  -
    type: image
    image:
      - /assets/ug_modules_favorite-1550526666.jpg
    alignment: left
  -
    type: text
    text: '<p><em>Favorite</em>- Adds a module to the <em>Favorites</em> category.<br></p><p><em>Info</em>- Contains general information, reviews, etc. For some modules, this also contains operational information. <br></p><h3>Working With Modules In Cabinets</h3>'
  -
    type: image
    image:
      - /assets/screenshots/ug_modules_selected.jpg
    alignment: left
  -
    type: text
    text: '<p>Clicking any non-control area (i.e., jack, knob, switch, etc.) of a module will select it. Selected modules will be outlined in yellow. Modules can also be selected by clicking and dragging a square over them. Depending upon cable behavior preferences, cables may show differently from unselected modules. Selected modules are affected by move, delete, and other commands.</p><p>To select multiple modules, [CTRL]-click modules in Windows or [CMD] (Apple key)-click on Macs, or simply drag a rectangle (starting in an area with no modules) over multiple modules. Multiple modules in different cabinets can be simultaneously selected.</p><h3>Moving Modules</h3>'
  -
    type: image
    image:
      - /assets/screenshots/ug_modules_movehand.jpg
    alignment: left
  -
    type: text
    text: '<p>To move a module (or modules), click and drag at the very top of the module. The cursor will change to a hand, and a shaded gray rectangle appears in the top area. Neighboring modules will magically scoot out of the way, and all cable connections stay intact. Groups of modules can also be highlighted and moved "en masse.</p><h3><strong>Module Right-Click Commands</strong></h3>'
  -
    type: image
    image:
      - /assets/ug_modules_rightclick_v3.jpg
    alignment: left
  -
    type: text
    text: '<p><em>Module Preset</em>- This allows loading and saving all parameter settings <em>for a single module. </em>This allows recall of module settings for future use in any patch. <br></p>'
  -
    type: image
    image:
      - /assets/ug_modules_savemodulepreset.jpg
    alignment: left
  -
    type: text
    text: '<p>To save the module settings, choose <em>Module Preset</em> from the right-clock menu, then click <em>Save As..., </em>enter a name and click <em>Save</em> (or click <em>Cancel</em> if you''re gonna chicken out, you big chicken).</p><p>Modules with at least one saved preset also have a <em>Manage Settings</em> right-click command. Selecting this opens the folder containing the presets for the module. This is useful for deleting or renaming module presets. <br></p><p>Saved module presets will appear in the menu beneath the <em>Save As </em>and<em> Manage </em>commands.</p>'
  -
    type: image
    image:
      - /assets/ug_modules_labels.jpg
    alignment: left
  -
    type: text
    text: '<p><em>Add Label</em>- Creates an editable text label that can be freely positioned within the boundaries of the module. The label will be in edit mode upon creation; in this way you''ll be able to immediately type the desired text. The text can be edited at any time either by right-clicking and choosing <em>Edit</em>, or by double-clicking on the text. <br></p><p>The label can be moved by simply dragging with the mouse. Right-click on the label to change the font or background color, or delete the label. The <em>Remove All</em> command will delete all labels for that module (but not for other modules).<br></p><p><em>Duplicate</em>- Creates a copy of the module in the next position to the right wide enough to accommodate the module. No cables will be attached to the copy. Modules can also be duplicated by ALT-dragging (Windows) or OPTION-dragging (on Mac).</p><p><em>Disconnect Cables</em>- Disconnects all cables currently connected to the module.</p><p><em>Reset Controls</em>- Initializes all of the selected module''s control settings. <br></p><p><em>Remove</em>- Deletes the module. Modules can also be deleted by highlighting them and hitting the DELETE key in Windows or the backspace key on Mac (the little DEL key in Windows and the big one above the backslash key on Mac).</p><p><em>Align Modules</em>- This is a quick shortcut for "pulling together" modules and eliminating gaps between them. <em>Align Modules&gt;Left</em>&nbsp;pulls all modules in the cabinet to the left. If there are no modules “hidden” beyond the right border of the Voltage Modular window, <em>Align Modules&gt;Right</em>&nbsp;pulls all modules in the cabinet to the right window border. If there are modules beyond the right window border, <em>Align Modules&gt;Right</em>&nbsp;aligns all modules in the cabinet to edge of the right-most module.</p><p><em>Module Help</em>- Links to information and module documentation on the Cherry Audio website.</p><p><em>About</em>- Displays revision and general information about the module. For third-party modules, this box often contains important information about how controls work, so have a look in here if you remember! <br></p><h3>Module Control Right-Click Commands</h3><p>Right-clicking any knob, slider, switch, or button reveals a standard right-click menu. Here’s what they do.</p>'
  -
    type: image
    image:
      - /assets/screenshots/ug_modules_rightclickcontrols.jpg
    alignment: left
  -
    type: text
    text: '<p><em>Edit Value</em>- Opens a field where exact values can be entered.</p><p><em>Set To Default Value</em>- Returns any control (i.e. knobs, sliders, buttons, switches, etc.) to their default value. It will be grayed out if the control is already at its default setting.</p><p><em>MIDI Learn/Unlearn</em>- These are used for assigning external MIDI hardware controls. Check out the Hardware MIDI Controller Assignment for more information.</p><p><em>Automation Assign</em>- Assigns controllers to DAW automation. Please see the <strong>DAW Automation</strong>&nbsp;section for more information.</p><p><em>Unlearn All</em>- Cancels all MIDI CC, DAW, and <em>Perform</em>&nbsp;control assignments.</p>'
  -
    type: buttons
    buttons:
      -
        type: button
        link_text: 'Continue to MIDI Continuous Controller Setup'
        url: /voltage-modular-user-guide/midi-continuous-controller-setup
        target_blank: false
        color: btn-yellow
  -
    type: text
    text: '<p><br></p>'
template: documentation
seo:
  description: 'We’ll cover the nuts and bolts of working with modules (unlike a hardware modular synth, no actual nuts or bolts are involved).'
id: 4a4dd8b0-2759-4c2b-bd86-db2ebeb5c34a
slug: working-with-modules
blueprint: documentation
