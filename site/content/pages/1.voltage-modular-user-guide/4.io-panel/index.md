title: 'I/O Panel'
body:
  -
    type: text
    text: '<h1>I/O PANEL</h1>'
  -
    type: image
    image:
      - /assets/ug_iopanel2.jpg
    alignment: left
  -
    type: text
    text: |
      <p>The input/output, aka I/O Panel, is Voltage’s "mission control." Here you’ll route audio signals, virtual control voltages, and MIDI to and from your computer, audio hardware, and DAW software. Let’s go over its jacks and controls:</p><h3>CV Outs</h3><p>All output jacks in this area output a virtual control voltage or "CV" just like a hardware modular synthesizer. These conform to the 1V/octave standard used in most analog synthesizers and can only transmit a single signal at any time.</p><p><em>Oct</em>- Transposes the pitch of the outgoing pitch control voltage in octaves.The LEDs to the right display transposition interval.</p><p><em>Pitch</em>- This is the pitch control voltage output. This usually is patched to an oscillator keyboard CV input, allowing oscillator pitch to track the keyboard in chromatic half-steps.</p><p><em>Gate</em>- Outputs a constant 5V gate signal for as long as a key is pressed. This typically is patched to an envelope generator or voltage-controlled amplifier to control amplitude.</p><p><em>Trig</em>- A trigger signal is much like a gate signal, but instead of staying high while a key is held, it briefly outputs 5V then returns to 0V (roughly 0.02 milliseconds). It’s often used to turn something on or off, or trigger a "one-shot" drum sound.</p><p><em>Single/Multi</em>- Defines how the <em>Gate</em>&nbsp;and <em>Trigger</em> voltages behave when a key is struck while another key is held. In <em>Single</em>&nbsp;mode, a new gate and trigger voltage will not be sent until all previously held keys are released. In <em>Multi</em>&nbsp;mode, new gate and trigger voltages are sent any time a new key is played. (Because the gate voltage is already "high," it will very briefly dip to zero volts when a new key is struck in order to let the module know to retrigger.)</p><p><em>Vel</em>- Outputs a control voltage between 0V and 5V, proportionate to how hard the key (or pad) is struck when using a velocity-sensitive controller.</p><p><em>Aftertouch</em>- Outputs a control voltage between 0V and 5V, proportionate to ongoing key pressure when using a controller that transmits aftertouch.</p><p><em>Sus</em>- Outputs a 5V control voltage when a MIDI sustain pedal message greater than 64 is received.</p><p><em>Bend</em>- Outputs a control voltage between -5V and 5V, proportionate to pitch wheel movements. No voltage is transmitted at nominal position.</p><p><em>Mod Wheel</em>- Outputs a control voltage between 0V and 5V, proportionate to mod wheel position.</p><h3>Poly CV Outs</h3><p>These are special type of jack that can transmit up to sixteen separate "lanes" of CV's, for use with special poly modules from Cherry Audio, PSP, and others. They make creating and playing poly patches a cinch! <br></p><p>They make use of a special "poly" cable, identifiable by its slight larger "D-shaped" connector; <strong>poly cables can only be patched to an appropriate poly jack</strong>. In addition to poly oscillators, filters, amps, mixers, etc., Voltage Modular includes a number of utility modules for splitting and converting poly cable signals to standard "mono" CV's for tremendous flexibility (type "poly" in the Library search field to see them). <br></p><p><em>Poly Pitch</em>- Pitch control voltage outputs. <br></p><p><em>Poly Gate</em>-
       Outputs 5V gate signals for as long as keys are pressed. <br></p><p><em>Poly Vel</em>- Outputs control voltages between 0V and 5V, 
      proportionate to how hard the key (or pad) is struck when using a 
      velocity-sensitive controller.</p><p><em>Number of Voices</em>- Globally sets the maximum number of poly voices, up to 16 voices. This can be helpful if you're using a computer with limited CPU.&nbsp; <br></p><h3>MIDI Jack</h3><p>Unlike most analog modular synthesizers, Voltage’s virtual MIDI jack transmits polyphonic pitch, note on-off, and MIDI CC data from external keyboard controllers and other devices. When used with various MIDI-compatible modules, this allows for polyphonic patches, arpeggios and more. Voltage MIDI cables are a little fatter than "standard" patch cables and can only be routed to modules with MIDI jacks, including the Poly Oscillator, Arpeggiator, Poly CV Converter, and a number of MIDI utility modules. The LED beside the jack indicates when MIDI data is being received from a controller.</p><h3>Transport</h3><p>Sorry, this isn’t some nifty Star Trek doodad, but it’s still pretty cool. The transport section carries 5V trigger CVs from your DAW host software that simplify incorporating Voltage into projects (especially where timing is concerned).</p><p><em>Play</em>- Transmits a 5V trigger when play mode is initiated in DAW host software.</p><p><em>Stop</em>- Transmits a 5V trigger when stop mode is initiated in DAW host software.</p><p><em>Sync Out</em>- Transmits a constant 96-pulse-per-quarter-note (PPQN) signal used to synchronize sequencers and other modules to DAW host tempo. These are intended for use with Voltage’s <em>Sync Divider</em>&nbsp;module, which essentially "slow down" the super-fast sync signal to musically relevant note-values. (Look out for more sync signal-compatible modules in the future.)</p><p>There are a couple of important points to understand about sync signals:</p><ul><li><strong>Sync signals are dumb:</strong>&nbsp;It’s important to understand that sync signals have no idea where the "one" is, or whether your DAW is playing or stopped. If a sync signal is routed to the <em>Sync Divider</em> module and its clock is sent to a sequencer, the sequencer will play at the same tempo as the host DAW project, but “shifted” in time by some random (and usually undesirable) amount.</li><li><strong>Use the <em>Reset</em> jack for perfect timing:</strong>&nbsp;You’ll notice that the Sync Divider, all sequencer modules, Eight To One Switch, and One To Eight Switch all have <em>Reset</em>&nbsp;input jacks. Routing the <em>Transport</em>&nbsp;section <em>Play</em>&nbsp;CV out to these resets these modules to "one" the instant the DAW play button is pressed, forcing everything to play in time. (Make sure the DAW play marker is starting on an even beat when you hit play.</li></ul><p><em>Play Gate</em>- Outputs a constant 5V signal any time the DAW host is in play mode. This isn’t necessary to play sequenced patches in sync, but it can be handy for more esoteric applications, such as gating voltage-controlled amplifiers during playback.<br></p><h3>Audio In From Host</h3><p>These allow audio to be routed in from either a host DAW when using the Voltage plug-in version (via the plug-in’s sidechain inputs) or via the computer’s onboard audio inputs when using the Voltage standalone edition. The <em>Audio In</em>&nbsp;sources can be set in <em>Settings</em>&nbsp;(gear icon at the top of the window) when using the standalone version.</p>
  -
    type: image
    image:
      - /assets/screenshots/ug_prefs_gear.jpg
    alignment: left
  -
    type: text
    text: '<p>… then clicking the <em>Audio</em>&nbsp;tab</p>'
  -
    type: image
    image:
      - /assets/screenshots/ug_settingsaudio.jpg
    alignment: left
  -
    type: text
    text: '<p>and selecting the <em>Input</em>&nbsp;pop-up window. Input level can be set using the horizontal meter next to the pop-up, or with the input meters by the jacks in the I/O Panel.</p>'
  -
    type: image
    image:
      - /assets/screenshots/ug_io_standaloneinput.jpg
    alignment: left
  -
    type: text
    text: '<p>The <em>Audio Ins From Host</em>&nbsp;are useful when using Voltage as an insert effect in a DAW (check out the <em>Insert &amp; Bus Effects</em>&nbsp;category in the presets). They can also be used as carrier and modulator sources with Voltages wickedly cool Vocoder module.</p><h3>Main Outs To Host</h3><p>This is Voltage’s master output section.</p><p><em>Volume Knob</em>- This is Voltage Modular’s master volume. Note that like the <em>CV&nbsp;Octave</em>&nbsp;and <em>Single/Multi</em>&nbsp;settings, its setting is stored with patches.</p><p><em>Limiter</em>- Clicking this engages a transparent-sounding audio level limiter across the final output bus. Its intention is to prevent blowing your head off with loud or obnoxious patches. Safety first at Cherry Audio!</p><p><em>Main Outs To Host Jacks</em>- The main out jacks that the final module of a patch is plugged into- the final module <strong>must</strong>&nbsp;be plugged into these (or the neighboring <em>Aux Outs</em>) in order to hear sound ("Hello, tech support? It doesn’t make any noise…").</p><ul><li><strong>Are They Inputs or Outputs?&nbsp;</strong>The concept can be a little confusing: these jacks are routed to your computer’s audio hardware. Technically, they’re inputs, because you’re plugging an output of a module into them, but since they’re internally attached to your computer’s audio hardware, we call them "outputs." (Incidentally, we had some "spirited discourses" on this topic and how to name them in I/O Panel. Just plug the final module in here and everything will be fine, we promise.)</li></ul><p><strong>Aux Outs To Host Jacks</strong>- These work exactly like the <em>Main Outs To Host</em>&nbsp;jacks explained in the preceding paragraph, but they’re routed to your audio hardware’s "extra" outputs. Depending on the audio interface used, they can potentially be custom routed within a DAW’s virtual mixer or set up to output to additional physical outputs.</p>'
  -
    type: buttons
    buttons:
      -
        type: button
        link_text: 'Continue to MIDI Tab section'
        url: /voltage-modular-user-guide/midi-tab
        target_blank: false
        color: btn-yellow
  -
    type: text
    text: '<p><br></p>'
template: documentation
seo:
  description: 'The input/output, aka I/O Panel, is Voltage’s "mission control."'
fieldset: documentation
id: a7b2ac0b-6987-44d9-888b-f8969d0c9ec8
