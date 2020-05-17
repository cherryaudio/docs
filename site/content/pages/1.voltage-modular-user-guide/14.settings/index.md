title: Settings
body:
  -
    type: text
    text: '<h1>SETTINGS</h1><p>Here’s where you’ll configure all the under-the-hood stuff such as cable behavior (oh behave!), user-interface preferences, account settings, and audio and MIDI settings.</p>'
  -
    type: image
    image:
      - /assets/ug_settings_general.jpg
    alignment: left
  -
    type: text
    text: |
      <h4>GENERAL</h4><p>Undo, user log file settings, and more. Wee! <em><br></em></p><ul><li><em>Add Undo For Module Control Changes With The Mouse</em>- Enabling 
      this allows undo of knob/slider/button adjustments to modules. You’ll 
      probably want to leave this on if you want the ability to undo all 
      aspects of patch editing and programming.</li><li><em>Load Last Preset On Startup (Standalone Only)</em>- Automatically loads the last preset used when Voltage Modular standalone version is started.</li><li><em>Create A Log File For Usage</em>-
       This creates a text doc of all of Voltage Modular's internal and 
      routines during use. It is mainly intended for those developing custom 
      modulars using our <em>Module Designer</em>&nbsp;app. Clicking <em>Show Log Folder</em>&nbsp;opens the folder containing Voltage Modular log file docs. It does not display a photo of a wooden log.<br><em></em></li><li><em>Preset Folder</em>- Displays the current location of Voltage Modular's sound presets. This can be changed by clicking and typing in the field.<ul><li><em>Browse</em>... - Displays the current location of preset folder in the file manager.</li><li><em>Set Default</em>- Sets the current displayed&nbsp;<em>Preset Folder</em>&nbsp;path as the default location</li></ul></li><li><em>Clear Cache Files</em>- Deletes all log files, temporary sounds, and the image cache.</li><li><em>Delete Module Files</em>-
       Deletes all modules. This is here in case a module becomes corrupt; you
       won't permanently lose anything, because Voltage Modular will "know" 
      your modules have been deleted and automatically re-download all 
      purchased modules. That said, it might take a bit, so don't delete 
      module files five minutes before you're gonna hit the stage.</li></ul>
  -
    type: image
    image:
      - /assets/ug_settings_cpu.jpg
    alignment: left
  -
    type: text
    text: |
      <h4>CPU</h4><p>These settings define how Voltage Modular utilizes your computer's processor hardware.<br></p><ul><li><em>Use Multiple Threads For Mixing</em>- On a fast computer with multiple cores, this feature can improve mixing performance considerably, but it will also use more CPU. On a slow computer, this feature can potentially slow down mixing and cause degraded performance. The 
      number of mix 
      threads used can be set in the dialog. This option is off by default, so definitely enable it if you have a honkin' fast multi-processor computer.<br></li><li><em>Use OpenGL Hardware Acceleration</em>- This allows improved graphics
       performance if your graphics card supports it. If you're not sure, we 
      recommend doing some research on your graphics card (or just try both 
      ways to see what performs better). </li></ul>
  -
    type: image
    image:
      - /assets/ug_settings_interface.jpg
    alignment: left
  -
    type: text
    text: |
      <h4>INTERFACE</h4><p>Here’s where you can customize Voltage Modular’s user interface settings.</p><ul><li><em>Reset To Default Window Size</em>-
       Resets the Voltage Modular workspace to 1280x720 pixels. Use this to 
      reset the window size if Voltage Modular's workspace somehow becomes too
       large for your display and can't be resized.<br></li><li><em>Minimum Cabinet Width</em>- This sets the narrowest you’ll be able to size Voltage Modular when resizing by dragging the edges of the window.</li><li><em>Cabinet Theme</em>- These are various “skins” for the outside and inside of the Voltage Modular’s cabinets. Try this with a hardware modular!</li><li><em>Tooltip Delay</em>-
       In case you hadn’t noticed, Tooltips are those handy little bits of 
      text that pop up when hovering over a control or jack (go ahead and try 
      it, we’ll wait…). The <em>Tooltip Delay</em>&nbsp;setting defines how long you must hover over a control before the tooltip pops up.</li><li><em>Monitor Pixel Density</em>- If you’re using a monitor with high 
      pixel density choose this - typically this would be a PC with a 4K+ 
      display. Macs with Retina displays fall into this category, but that 
      wiley OS X will automatically adjust for this, so you shouldn’t need to 
      change this.</li><li><em>Library Location</em>- This determines whether the library containing the <em>Modules</em>, <em>Cabinets</em>, <em>MIDI</em>, and <em>Store</em> tabs will appear on the left (default) or right side of the workspace.<br></li><li><em>On Control Double-Click</em>- Defines what happens when the mouse is double-clicked on a control. If <em>Edit Value</em>&nbsp;is selected, an exact number can be entered by typing the number and hitting ENTER or RETURN. If <em>Sets Default Value</em>&nbsp;is selected, double-clicking a control resets it to its default value.</li><li><em>Mouse Wheel Adjusts Control Value- </em>Enabling
       this lets you adjust knob, slider, and switch values by moving the 
      mouse wheel (or sliding your finger if you're using an Apple Magic 
      Mouse).<br></li><li><em>Do Not Show Tooltips Unless From Mouse Down</em>-
       With this checked, tooltips won’t display when hovering over controls; 
      they’ll only display if the mouse button is down. This typically occurs 
      when moving a rotary knob or slider control.</li><li><em>Hide Store On Library View During Searches</em>- If this box is unchecked, Voltage Modular will show modules don’t own in a special <em>Store</em>&nbsp;category. Clicking this option disables display of the Store category and only shows modules you own.</li><li><em>MIDI Program Changes Should Change Current Preset</em>- Allows MIDI program change messages to change Voltage Modular patches.</li></ul>
  -
    type: image
    image:
      - /assets/ug_settings_cables.jpg
    alignment: left
  -
    type: text
    text: '<h4>CABLES<br></h4><p>This where you’ll set how Voltage Modular’s virtual patch cables behave.</p><ul><li><em>Animate Cables</em>- When checked, Voltage Modular cables will bend and dangle like real cables. This makes everything sound better (not really, but it looks cool).</li><li><em>Move Cables Away</em>- When checked, hovering over a cable (or multiple cable spaghetti) will temporarily shift them out of the way to make it easier to see modules beneath.</li><li><em>3D Cables</em>- Checking this shades cables to appear more well, three-dimensional. Best of all, you won’t need those silly red and green glasses to see this.</li><li><em>Draw Shadow</em>- Causes cables to cast a shadow upon modules.</li><li><em>Cable Thickness</em>- Adjusts the thickness of all cables.</li><li><em>Transparent Cables</em>- This works in conjunction with the <em>Cable Transparency</em> button discussed previously. Selecting <em>All Cables</em> will make the <em>Cable Transparency</em> slider affect all cables. <em>With All But Current Module</em> selected, hovering over a module will make its cables opaque. If the <em>Cable Transparency</em> control is set to its maximum setting, <em>Transparent Cables</em> will have no effect.</li><li><em>Show Signal Animation</em>- Enabling this superimposes a stream of “marching ants” over cables displaying signal flow and direction. (They’re easier to see at wider cable width settings.) The Speed slider adjusts the speed of display, but has no effect on signals.</li><li><em>Enable Animations For Jacks</em>- Selecting this shows a nifty little animation when a jack is clicked to use its built-in six-way mult. If you’re a super impatient Type A personality (like the guy typing this), unchecking this box disables the animation, causing the six-way mult to pop up immediately.</li><li><em>Hide Cables When Dragging Modules</em>- This one’s pretty self-explanatory; having the cables disappear when moving modules around can simplify arranging modules.</li></ul>'
  -
    type: image
    image:
      - /assets/ug_settings_account.jpg
    alignment: left
  -
    type: text
    text: |
      <h4>ACCOUNT<br></h4><p>Settings for your personal login information and account.</p><ul><li><em>Email</em>- This displays the email address of the current login.<br></li><li><em>Update Login Info</em>-
       No, this isn’t a place for news and tour dates for yacht rock superstar, 
      Kenny Loggins. Clicking this opens the same email and password login 
      screen you’ll see when initially launching Voltage Modular.</li><li><em>Ask Before Downloading Updated Modules</em>-
       We often fix bugs and improve modules. By default, Voltage Modular 
      automatically downloads new versions of modules when available. Checking
       this box defeats automatic updates and will ask if you’d like to update
       modules. We’ll never make changes to existing modules that can 
      potentially “break” existing patches, but nonetheless, we recommend 
      enabling <em>Ask Before Downloading Updated Modules</em>&nbsp;if you’re using Voltage Modular for live performances or other “mission critical” situations.</li><li><em>Use One-Click Purchasing</em>-
       Enabling this skips over all that login/credit card nonsense and speeds
       up buying modules. Don’t leave this on if you have an irresponsible kid
       who’s crazy for modular synthesis (or if YOU are an irresponsible kid 
      who’s crazy for modular synthesis).</li><li><em>View Account Settings</em>-
       This opens your personal account page on the Cherry Audio Store website
       containing information about modules purchased and more. </li></ul>
  -
    type: image
    image:
      - /assets/ug_settings_audiomidi.jpg
    alignment: left
  -
    type: text
    text: '<h4>AUDIO/MIDI <br></h4><p>Settings for audio and MIDI hardware input and output. <strong>This tab is only visible in the standalone version of Voltage Modular.</strong></p><ul><li><em>Output</em>- Use this drop-down menu to choose a physical audio output source. This defaults to <em>Built-In Line Output</em>, i.e. your computer’s onboard system audio, but you’ll get better fidelity with an external professional audio interface. The biggest audible difference is usually reduced background noise or hum, but external audio hardware also offers greater flexibility in terms of number of inputs and outputs and built-in mic or low-level instruments pres (i.e. electric guitars). These are especially useful if you’re using Voltage Modular’s external inputs to process sound. The <em>Test</em> button will produce a sine wave when clicked; this will help with troubleshooting, aka, “WHY THE HECK ISN’T THIS MAKING ANY NOISE?!?”</li><li><em>Input</em>- Clicking the drop-down menu lets you select which physical input(s) feed the <em>Audio In from host jacks</em>&nbsp;in the I/O Panel. The small horizontal input meter to the right illuminates when the selected input is receiving an audio signal.</li><li><em>Sample Rate</em>- This sets Voltage Modular’s global sample rate. We generally suggest using the 48 kHz default rate for best overall performance, but if you have the processor horsepower, feel free to try 96 kHz mode.</li><li><em>Audio Buffer Size</em>- As with any digital audio app, this defines performance vs. note latency, and will largely depend upon computer CPU speed. A professional external audio interface will almost always exhibit better performance than “built-in” system audio. Lower settings will result in less latency (in the form of faster response to notes played), but will increase the chances of audio gapping or crackling noise.</li><li><em>Active MIDI Inputs</em>- Displays all available MIDI input sources, i.e. keyboards, pad controls, MIDI knob/fader control surfaces, etc. Checking the boxes will enable them.</li></ul>'
  -
    type: buttons
    buttons:
      -
        type: button
        link_text: 'Continue to Keyboard Shortcuts and Mouse Control'
        url: /voltage-modular-user-guide/shortcuts-and-mouse-control
        target_blank: false
        color: btn-yellow
  -
    type: text
    text: '<p><br></p>'
template: documentation
seo:
  description: 'This strip at the top of Voltage’s interface is where you’ll load, save, and create sound presets.'
fieldset: documentation
id: 9f284c5c-8a1b-44e0-a66f-d97b1cef258d
