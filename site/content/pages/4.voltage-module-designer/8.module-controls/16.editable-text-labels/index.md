title: 'Editable Text Labels'
body:
  -
    type: text
    text: '<h2>Editable Text Labels</h2><p>Editable text labels are nearly identical to regular text labels, with the important exception that users can edit the text in them. All the knob and button labels on Voltage Modular’s Performance Module are editable text labels, for instance. Voltage Modular will automatically handle save/restore when user change an editable text label’s text and then saves a preset.</p><p><strong>Java Class Name:</strong> &nbsp;VoltageLabel</p><p><strong>Notable APIs:</strong></p><p><code>void SetEditTextColor( Color color );</code><br>Sets the text color to use during edit mode.</p><p><code>void SetEditBackColor( Color color );</code><br>Sets the color to use for the control’s background during edit mode.</p><p><code>void SetEditOutlineColor( Color color );</code><br>Sets the color to use for the control’s border during edit mode.</p><p>See also the APIs section for non-editable <a href="{{ link:d4522b76-d10a-4ff8-86f4-9fca7359703f }}">text labels</a>, above.</p><p><strong>Notifications:</strong> A <code>Label_Changed </code>notification will arrive in <code>Notify()</code> whenever a user has changed the contents of an editable text label:</p>'
  -
    type: image
    image:
      - /assets/VMPG/image78.png
    alignment: left
  -
    type: text
    text: '<p><strong>Save/Restore State:</strong> &nbsp;Voltage Modular will save the text in an editable label and restore it when users save and restore presets. </p>'
  -
    type: image
    image:
      - /assets/VMPG/image21.png
    alignment: left
  -
    type: text
    text: '<p><strong>Start Editing On: </strong>This lets you specify whether single clicking or double clicking on the control initiates editing mode.</p><p><strong>Edit Mode Text, Background, and Border Colors:</strong> Colors used when the control enters editing mode.</p><p>See the <a href="{{ link:d4522b76-d10a-4ff8-86f4-9fca7359703f }}">Text Label</a> control above for descriptions of the other properties.&nbsp;&nbsp;</p>'
template: documentation
fieldset: documentation
id: 73dfd66e-ea7b-4394-9993-084b80c7f72c
