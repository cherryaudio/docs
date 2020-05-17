title: 'Toggle Buttons'
body:
  -
    type: text
    text: '<h2>Toggle Buttons</h2>'
  -
    type: image
    image:
      - /assets/VMPG/image24.png
    alignment: left
  -
    type: text
    text: '<p>Toggle buttons will stay clicked when you click on them, making them handy as the interfaces for features that are always either on or off - the “loop” button on the module designer’s Test Signals module, which turns loop mode on or off, is a typical example. You can also use the “Group ID” field to group multiple toggle buttons as radio buttons, with the result that clicking on any toggle button in the group will unclick all other toggle buttons in the group.</p><p><strong>Java Class Name:</strong> &nbsp;VoltageToggle</p><p><strong>Notifications:</strong></p><p>A <code>Button_Changed</code> notification will arrive in <code>Notify()</code> whenever a toggle button gets pressed or unpressed:</p>'
  -
    type: image
    image:
      - /assets/VMPG/image48.png
    alignment: left
  -
    type: text
    text: '<p><strong>Save/Restore State:</strong> Voltage Modular will save and restore the states of any toggle buttons that get saved in presets. When Voltage Modular loads a preset, it’ll send a <code>Button_Changed</code> notification at module startup (but after your Initialize function has been called) for each of your toggle buttons, with doubleValue = 1 (the button is down) or doubleValue = 0 (the button is up).</p>'
  -
    type: image
    image:
      - /assets/VMPG/image70.png
    alignment: left
  -
    type: text
    text: "<p>Most of the toggle button properties are shared with the regular button control (above), so we’ll just list the ones that are unique to toggle buttons here:</p><p><strong>Group ID: </strong>If you want this button to be part of a group of radio buttons, set the Group ID to a number larger than zero. Clicking on any toggle button with a group ID &gt; 0 will automatically unclick any other toggle buttons with the same group ID.</p><p><strong>Is Initially Toggled:</strong> If checked, this button will be in its toggled state when your module gets added to a Voltage Modular cabinet. (Though if you save a preset with the button untoggled, it’ll still be untoggled when you reload that preset.)</p><p><br><br></p><p>\f<br></p><p><br></p>"
template: documentation
fieldset: documentation
id: a7a38c7f-60aa-491e-81b1-ce87e2fb21bc
