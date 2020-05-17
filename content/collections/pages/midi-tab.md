title: 'MIDI Tab'
body:
  -
    type: text
    text: '<h1>MIDI TAB</h1><p>This is command central for external MIDI controller, DAW automation, and Voltage Modular’s <em>Perform</em>&nbsp;control panel assignments. Here you’ll be able to see information about all currently assigned controllers and adjust control ranges. Let’s go over the <em>MIDI</em>&nbsp;tab functions and displays.</p>'
  -
    type: image
    image:
      - /assets/screenshots/ug_midilearn_cutofftab.jpg
    alignment: left
  -
    type: text
    text: '<p><em>MIDI Learn</em>- This is almost exactly the same as enabling MIDI learn mode by right-clicking a control. Click the <em>MIDI Learn</em>&nbsp;button to enter learn mode (all controls turn purple). Unlike right-clicking on specific knobs where Voltage Modular automatically exits controller assignment mode, clicking the <em>MIDI Learn</em>&nbsp;knob "stays on" to enable assignment of multiple hardware controls.</p><p>To assign multiple controls, click <em>MIDI Learn</em>, click an on-screen control, move the desired hardware knob or slider, then continue clicking and assigning on-screen controllers until all desired controls are assigned.</p>'
  -
    type: image
    image:
      - /assets/screenshots/ug_midilearn_stoplearning.jpg
    alignment: left
  -
    type: text
    text: '<p>When you’re done assigning controllers, click <em>Stop Learning</em>. (Just remember that when we stop learning, we stop growing… oh, forget it…)</p><p><strong>MIDI Tab Columns</strong></p><p><em>Name</em>- Displays the name of the module parameter being controller.<br><br><em>Type</em>- There are three possible types of controller automation in Voltage Modular:</p><ul><li><em>MIDI Continuous Controller (CC)</em>- The standard 128 MIDI controller numbers as defined in the MIDI spec. More specifically, these are the controllers transmitted by hardware knob, slider, or pad controllers. MIDI CC’s can be used to control parameters in real-time or recorded and played back within DAW software.</li><li><em>Parameter</em>- Up to 128 slots used with DAW parameter automation. Compared to MIDI CC controllers, DAW automation typically has finer control resolution, easy on-screen drawing and editing of controller movements, and allows controller movements to be directly written by moving Voltage Modular’s on-screen module controls.</li><li><em>Perform Controls Panel</em>- This refers to the panel directly beneath the I/O Panel containing nine knobs and four buttons, which are assignable to any module controls in a patch. Each knob or switch can control can control an unlimited number of module parameters over different ranges (via the <em>Min</em>&nbsp;and <em>Max</em>&nbsp;controls), and external hardware controllers can be assigned to the <em>Perform</em>&nbsp;knobs and buttons. (See the <strong>Perform Controls Panel</strong>&nbsp;section for the full lowdown.)</li></ul><p><em>Value-</em>&nbsp;Displays the specific automation controller. In the case of a MIDI CC, this would be the MIDI CC controller number. For DAW automation, this is the automation slot # (1-128) and associated module control parameter. For the <em>Perform</em>&nbsp;controls panel, this displays the knob or button number.</p><p><em>Min</em>- Sets a limit on the lowest value any automation control can set a mapped controller to. This actually recalibrates the range of the automation controller to the remaining parameter range.</p><p><em>Max</em>- Sets a limit on the highest value any automation control can set a mapped controller to. This actually recalibrates the range of the automation controller to the remaining parameter range.</p><ul><li><strong><em>Super Tricky Min-Max Inversion</em></strong>- Not only can parameter ranges be limited via the the <em>Min</em>&nbsp;and <em>Max</em>&nbsp;knobs, mapped control destinations can be completely inverted by setting the <em>Min</em>&nbsp;knob all the way up and the <em>Max</em>&nbsp;knob all the way down (or anywhere in between).<br></li></ul><h3>MIDI Tab Column Configuration Right-Click Menus</h3>'
  -
    type: image
    image:
      - /assets/screenshots/ug_miditab_columsnrightclick.jpg
    alignment: left
  -
    type: text
    text: '<p>Right-clicking anywhere in the top row displays the column configuration menu.</p><p><em>Auto-size This Column</em>- Automatically resizes so that all text in this column is visible.</p><p><em>Auto-size This Column</em>- Automatically resizes all columns simultaneously so that all text visible.</p><p><em>Column View Filters</em>- Clicking any of these will hide or show the respective columns.</p><h3>MIDI Tab Parameters Right-Click</h3>'
  -
    type: image
    image:
      - /assets/screenshots/ug_miditab_rightclick.jpg
    alignment: left
  -
    type: text
    text: '<p>Right-Clicking on an assigned parameter opens the menu above.</p><p><em>MIDI Learn</em>- This is used to change the controller assigned to a particular parameter. This only works if you’re changing to a MIDI CC controller.</p><p><em>Unlearn</em>- Deletes the selected automation parameter.</p><p><em>Unlearn All-</em>&nbsp;Deletes all controller assignments for the patch. Voltage Modular will display a warning dialog prior to deletion in order to thwart potential disasters</p>'
  -
    type: buttons
    buttons:
      -
        type: button
        link_text: 'Continue to Creating A Basic Patch'
        url: /voltage-modular-user-guide/creating-a-basic-patch
        target_blank: false
        color: btn-yellow
  -
    type: text
    text: '<p><br></p>'
template: documentation
seo:
  description: 'This is command central for external MIDI controller, DAW automation, and Voltage Modular’s Perform control panel assignments.'
id: 77e0c255-591f-41c1-8e96-6d6ab29943dd
slug: midi-tab
blueprint: documentation
