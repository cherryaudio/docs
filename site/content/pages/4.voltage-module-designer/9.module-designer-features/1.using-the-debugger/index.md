title: 'Using the Debugger'
body:
  -
    type: text
    text: '<h2>Using the Debugger</h2><p>To test your module with the debugger, choose the “Debug” option from the “Build” menu. The module designer will build your module and, assuming no compile errors, launch a child process with a cabinet containing your module and the Test Signals module:<br></p>'
  -
    type: image
    image:
      - /assets/VMPG/image44.png
    alignment: left
  -
    type: text
    text: '<p>The Test Signals Module contains a variety of inputs and outputs to help you test your module. It includes five sections, from top to bottom:</p><p><strong>From Host:</strong> &nbsp;A variety of CV and MIDI inputs from the MIDI devices you’ve chosen in the module designer’s Preferences dialog.</p><p><strong>File Playback:</strong> If you specify the “File” option from the Sound Source section (just below this one), you can use this section to load an audio file (MP3, WAV, OGG, FLAC, or AIFF) and use it as a sound source for processing in your module.</p><p><strong>Sound Source: </strong>This lets you choose an audio source for sending to the module via the “Test Signal Outputs” section below. You can use a square wave, a sine wave, an audio file, or an external input such as a microphone (see the module designer’s Preferences dialog for available inputs). If you select the sine or square waves, the “Osc Freq” knob sets the waveform’s frequency.</p><p><strong>Test Signal Outputs:</strong> This section contains mono and stereo output jacks for sending your chosen sound source to your module.</p><p><strong>Audio Ret To Host:</strong> Hook the output from your module back to these input jacks; they’ll get routed to the audio outputs (your speakers, probably) specified in the module designer’s Preferences dialog.</p><p><strong>The Child Process’s Menu</strong></p>'
  -
    type: image
    image:
      - /assets/VMPG/image29.png
    alignment: left
  -
    type: text
    text: '<p>The menu in the debugger child process lets you test your module’s undo/redo capabilities (via the “Edit” menu) and how it looks at varying zoom levels (via the “View” menu). The “Add Modules” menu allows you to add other Voltage modules to your test cabinet:<br></p>'
  -
    type: image
    image:
      - /assets/VMPG/image5.png
    alignment: left
  -
    type: text
    text: '<p>The Module Designer will remember your cable connections, extra modules, and control settings from session to session. If you need to clear them, select the “Clear Test/Debug Mode Settings” option from the module designer’s “Build” menu.</p><p>Note that if you hit a breakpoint or otherwise pause debug execution, it’ll halt execution of the entire debugger child process, including the interface thread, so the <em>Edit/View/Add Modules</em> menus won’t be accessible when execution is paused.</p><p>When the debugger launches, the title bar for the output pane (the pane at the bottom of the module designer in the default setup) will sprout a series of tabs along its left edge:</p>'
  -
    type: image
    image:
      - /assets/VMPG/image8.png
    alignment: left
  -
    type: text
    text: '<p>and a row of buttons along the right:<br></p>'
  -
    type: image
    image:
      - /assets/VMPG/image1.png
    alignment: left
  -
    type: text
    text: '<p>When execution of your module has paused due to hitting a breakpoint, pausing, etc., the buttons allow you to resume execution in various ways:<br></p><p><strong>resume:</strong> &nbsp;resumes execution unconditionally, either until another breakpoint is hit or you pause execution via the “Pause” option on the Debug menu.<br></p><p><strong>step in:</strong> &nbsp;If the line of code where execution is paused includes a function call, step into the function. If it doesn’t, skip to the next line of code.<br></p><p><strong>step over:</strong> &nbsp;execute the current line of code without stepping into any function calls it contains<br></p><p><strong>step out:</strong> execute code until execution has exited the current function.<br></p><p><strong>The Row of Tabs:</strong></p><p>The “Output” tab shows the normal contents of the Output pane, including the results of any Log statements in your code:</p>'
  -
    type: image
    image:
      - /assets/VMPG/image75.png
    alignment: left
  -
    type: text
    text: '<p><strong>“Oscillator”:</strong> This tab will be labeled with your module’s variable name and will show the values of all the variables in your module:<br></p>'
  -
    type: image
    image:
      - /assets/VMPG/image15.png
    alignment: left
  -
    type: text
    text: '<p>The first column shows variable names, the second column their values, and the third column their types. Most non-primitive types will have empty value columns; click the little expansion arrows to the left of their names to show all their child members, which will have filled-in value columns if they’re not themselves complex types.<br></p><p>The “Locals” tab has the same layout as the Module tab, but shows values for all the local variables at the current point of execution:<br></p>'
  -
    type: image
    image:
      - /assets/VMPG/image73.png
    alignment: left
  -
    type: text
    text: '<p>The “Threads” tab shows all the active threads and the call stacks for each, with threads in the left column and the selected thread’s call stack, if available, in the right column:<br></p>'
  -
    type: image
    image:
      - /assets/VMPG/image54.png
    alignment: left
  -
    type: text
    text: '<p>Click on a stack frame and then switch to the Locals tab to see local values for that stack frame, if any are available.<br></p><p>The Module, Locals, and Threads tabs will be disabled unless debug execution is paused.<br></p><p><strong>Breakpoints:</strong> To set a breakpoint at a particular line of code, either click in the line’s left margin, right-click and select the “Toggle Breakpoint” option, or click the toggle-breakpoint hotkey (F9 on Windows, Command-Backslash on Mac). A red circle will appear in the left margin to indicate that the line has a breakpoint:<br></p>'
  -
    type: image
    image:
      - /assets/VMPG/image11.png
    alignment: left
  -
    type: text
    text: '<p>Use the same process to remove breakpoints. There’s also a “Remove All Breakpoints” option on the Debug menu.<br></p><p>When execution stops at a breakpoint, the line will be highlighted in the code editor and a yellow arrow will appear in the margin:<br></p>'
  -
    type: image
    image:
      - /assets/VMPG/image25.png
    alignment: left
  -
    type: text
    text: "<p><br></p><p><br><br></p><p>\f<br></p><p><br></p>"
template: documentation
fieldset: documentation
id: 16cc937b-3ecd-47ec-9c3e-8c819d7bad85
