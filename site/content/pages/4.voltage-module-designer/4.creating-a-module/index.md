title: 'Creating a Module'
body:
  -
    type: text
    text: |
      <h1>Creating a Module</h1><p>The basic steps for creating a module are:
      </p><ol><li>Setting the basic parameters for a module, including module name, Java class name,
      Package Name, module width, etc.
      
      							</li><li>Choosing a background graphic, known as a “skin”, for the module.
      
      							</li><li>Placing controls, such as jacks, knobs, buttons, text labels, etc. onto the module.
      
      							</li><li>Writing the Java code for the module to hook up all the controls.
      
      							</li></ol><p>To configure the basic properties of a module, click on the background of a module and you will
      see the Module Properties in the Properties Pane. (If you don’t see the Properties Pane, click
      View-&gt;Properties Pane to ensure that it is visible.)&nbsp;</p>
  -
    type: image
    image:
      - /assets/VMPG/image26.png
    alignment: left
  -
    type: text
    text: |
      <p><strong>Module Name</strong></p><p>This is the full name of the module. The module will be listed in a user’s module library and in
      the Voltage Module Store with this name.
      </p><p><strong>Java Class Name
      </strong></p><p>This is the name of the main Java class for your module project. It must be a valid Java class
      name, and cannot contain any spaces. Because, in this example, the class is named
      PolyCVConverter, the first line of the class will read:
      </p><p><code>Public class PolyCVConverter extended VoltageModule</code><sup>
      </sup></p><p><strong>Package Name
      </strong></p><p>This is the name of the unique package that this specific module belongs to. The package for
      every module you create should be unique. Java package naming conventions ​<a href="https://docs.oracle.com/javase/tutorial/java/package/namingpkgs.html" target="_blank">can be found
      here</a>.
      </p><p><strong>Manufacturer
      </strong></p><p>This should be your name, or the name of your company. Modules will be listed in a user’s
      module library and in the Voltage Module Store with this manufacturer name.
      </p><p><strong>Type of Module
      </strong></p><p>This allows you to choose one of five main categories for your module. The categories are:
      </p><ul><li><em><strong>Sources</strong></em> -​ oscillators, noise generators, percussion modules, etc.&nbsp;</li><li><em><strong>Processors</strong></em> -​ filters, wave shapers, etc.</li><li><strong><em>Controllers</em> </strong>​- envelope generators, sequencers, keyboards, MIDI-to-CV, etc.
      Effects ​- reverb, delay, phaser, chorus, etc.</li><li><em><strong>Utilities</strong></em> ​- mixers, gates, multipliers, amplifiers, etc.</li></ul><p>It is very important that you select the best category for your module. Modules will be listed in a
      user’s module library and in the Voltage Module Store with this selection. In addition, choosing
      the correct module type helps Voltage mix audio in the most efficient manner.
      </p><p><strong>Width &amp; Height
      </strong></p><p>Voltage modules are sized according the the Eurorack specification. Eurorack modules are all
      128.5 millimeters high, or approximately 5” high. The width of a module is measured in units
      called Horizontal Pitch, or HP. One HP is .2” wide. Voltage module sizes are always in integer
      units of HP. The Width dropdown will allow you to select the width in inches, and it will also
      show you the size in HP and in pixels.
      </p><p>The module shown is 3.2 inches wide, which is 16 HP. At 100% zoom, the module will be 230
      pixels wide by 360 pixels high. You can use these dimensions to create custom background art
      for your module.
      </p><p><strong>Background
      </strong></p><p>This launches a dialog that lets you select your module’s background. It can be either a solid
      color or an image file.
      </p><p><strong>Extra Resources
      </strong></p><p>This lets you embed additional resources (such as audio files in a sampling module, to name
      one likely example) in your module. Use the <code>GetBinaryResource()</code><strong>&nbsp;</strong>function to obtain <strong>ByteBuffers
      </strong>resources you’ve added to the Extra Resources section.
      </p><p><strong>Additional Java and JAR Files
      </strong></p><p>These allow you to add extra Java and JAR files to your project. Any extra Java files you add
      can be edited in the module designer’s code editor.
      </p><p><strong>Copyright
      </strong></p><p>This field allows you to declare a copyright statement that will be embedded in your published
      module.
      </p><p><strong>Notes
      </strong></p><p>You can use this field to store any notes about this module. These notes won’t be added to your
      published module; they’re there strictly for your benefit.
      </p><h2><em>Placing Controls
      </em></h2><p>To place controls onto your module, make sure that the Controls Pane is visible. If it isn’t, click
      View-&gt;Controls Pane to show the pane.
      </p>
  -
    type: image
    image:
      - /assets/VMPG/image72.png
    alignment: left
  -
    type: text
    text: |
      <p>On the Controls Pane, you will see a list of various controls that can be added to a module.
      Adding these controls is as simple as dragging and dropping them onto your module.
      </p><p>For example, to add a knob to your module, simply click on the “Knob” text and drag the control
      onto your module. When you release the mouse button, a knob will be created on your module.
      </p>
  -
    type: image
    image:
      - /assets/VMPG/image43.png
    alignment: left
  -
    type: text
    text: |
      <p>The red outline indicates that this control is currently selected. To resize the control, click on the
      red outline and drag in any direction. Note that some controls, such as jacks, cannot be resized,
      and other controls, such as knobs, will always have a fixed ratio of width to height. Controls in
      Voltage use vector graphics, so it is safe to resize them to any size that you want.
      </p><p>When a control is selected, the control’s properties will be shown in the Properties Pane.
      </p>
  -
    type: image
    image:
      - /assets/VMPG/image39.png
    alignment: left
  -
    type: text
    text: |
      <p>Every control will have the following properties:
      </p><p><strong>Name
      </strong></p><p>This is the visible name of the control. It is important to name every control well, because these
      names are often visible to the user. For example, a volume control should be given a
      descriptive name, such as “Master Volume”. ​Note that every control name must be unique.
      In addition, once you have published your module, you should not change the control
      names, as they are used to save &amp; restore the settings of a module.​​ So please take care to
      name every control well from the start.
      </p><p><strong>Variable Name
      </strong></p><p>Every control is represented by a variable in the Java code. To make programming easier, it is
      recommended that you give controls a descriptive variable name. For example, a volume
      control might be given a variable name of volumeKnob. A variable will be automatically created
      for each control. It will look like this:
      </p><p><code>private VoltageKnob volumeKnob;</code>
      </p><p><strong>Left
      </strong></p><p>This is the X position of the control on the module.
      </p><p><strong>Top
      </strong></p><p>This is the Y position of the control on the module.
      </p><p><strong>Width
      </strong></p><p>This is the width of the control.
      </p><p><strong>Height
      </strong></p><p>This is the height of the control.
      </p><p>There are multiple ways to change the position of a control. You can drag it with your mouse;
      you can select it and use your arrow keys to position it; or you can manually type in new values
      into the Left and Top property fields.
      </p><p>Likewise, there are multiple ways to resize a control. You can drag the red outline to resize a
      control; or you can type new size values into the Width and Height property fields.
      </p><p>Every control will have automatically-generated code that creates the control, sets its position,
      and sets any flags and properties. When you change any property of a control, including its
      variable name, all of the automatically generated code will be instantly updated to match the
      new settings.
      </p><p>Each controls type will have many additional properties that will be discussed in more detail in
      the documentation for each control type.&nbsp;</p>
template: documentation
fieldset: documentation
id: f80db4e6-420c-4af1-b132-67e1c8dfc6fc
