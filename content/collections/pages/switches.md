title: Switches
body:
  -
    type: text
    text: '<h2>Switches</h2>'
  -
    type: image
    image:
      - /assets/VMPG/image50.png
    alignment: left
  -
    type: text
    text: '<p><strong>Java Class Name:</strong> &nbsp;VoltageSwitch</p><p><strong>Notable APIs:</strong></p><p><code>void SetValue( double value );</code><br>Sets the switch’s position. For a 2-stage switch, the valid values are 0 and 1; for a 3-stage switch, the valid values are 0, 1, and 2, etc.</p><p><code>double GetValue();</code><br>Returns the switch’s current position.</p><p><strong>Notifications:</strong> A <code>Switch_Changed </code>notification will arrive in <code>Notify()</code> whenever a switch’s value changes:</p>'
  -
    type: image
    image:
      - /assets/VMPG/image37.png
    alignment: left
  -
    type: text
    text: '<p><strong>Save/Restore State: </strong>&nbsp;Voltage Modular will save &amp; restore the states of switches when users save &amp; load presets. When a preset loads, you’ll receive <code>Switch_Changed </code>notifications at module startup (just after your Initialize() function has run) for each of the switches on your module that aren’t set to their default states.<br></p>'
  -
    type: image
    image:
      - /assets/VMPG/image71.png
    alignment: left
  -
    type: text
    text: '<p><br></p><p><br></p>'
template: documentation
id: 9a5a2f22-1aab-4b94-b912-89f20fd425d9
slug: switches
blueprint: documentation
