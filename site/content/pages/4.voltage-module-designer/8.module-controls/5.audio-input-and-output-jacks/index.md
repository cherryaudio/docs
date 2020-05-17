title: 'Audio Input and Output Jacks'
body:
  -
    type: text
    text: '<h2>Audio Input and Output Jacks</h2>'
  -
    type: image
    image:
      - /assets/VMPG/image27.png
    alignment: left
  -
    type: text
    text: '<p><strong>Java Class Name:</strong> &nbsp;VoltageAudioJack</p><p><strong>Notable APIs:</strong></p><p><code>boolean IsConnected();</code><br>his function will return true if any cables are connected to this jack.</p><p>v<code>oid SetValue( double newValue );</code><br>This sets a new value for this jack (only applicable to output jacks); if another module has an input jack connected to this jack, they can call <code>GetValue() </code>to retrieve the value you’ve set. Audio jack <code>GetValue()</code> and <code>SetValue()</code> calls are the primary way that modules communicate with each other. You’ll generally want to check the values of any input jacks and set the values of any output jacks (at least if they’ve changed) in every call to <code>ProcessSample()</code>.</p><p><code>double GetValue();</code><br>This retrieves the current value arriving at the jack (only applicable to input jacks).</p><p><strong>Notifications:</strong></p><p>A <code>Jack_Connected </code>notification will arrive in <code>Notify()</code> whenever a new cable gets connected to a jack, and a <code>Jack_Disconnected</code> notification will arrive when all cables have been disconnected from a jack:</p>'
  -
    type: image
    image:
      - /assets/VMPG/image22.png
    alignment: left
  -
    type: text
    text: '<p><strong>Save/Restore State:</strong> &nbsp;When loading a preset, Voltage Modular will reconnect any cables that were attached to a jack when the preset got saved.<br></p>'
  -
    type: image
    image:
      - /assets/VMPG/image66.png
    alignment: left
  -
    type: text
    text: "<p><br></p><p><br><br></p><p>\f<br></p><p><br></p>"
template: documentation
fieldset: documentation
id: 97a0763c-6b54-4cb4-b1bc-31b2992319cf
