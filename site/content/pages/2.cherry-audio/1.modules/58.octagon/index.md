title: Octagon
body:
  -
    type: text
    text: '<h1>OCTAGON</h1>'
  -
    type: image
    image:
      - /assets/ug_octagon_main.jpg
    alignment: left
  -
    type: text
    text: '<p>Octagon is a mondo powerhouse sequencer. At first glance, it appears to have just 8 steps, but it actually can be set from 1 up to 32 steps, and each step can have up to 8 individual clock "pulses." Add this to myriad step play order options, per-step 303-style slide, and it''s easy to see what a beast Octagon is!&nbsp;</p><p>We''ll begin by explaining Octagon''s top section for global controls, including transport, number of steps, and more.</p><h2>Global Controls</h2>'
  -
    type: image
    image:
      - /assets/ug_octagon_stepplay.jpg
    alignment: left
  -
    type: text
    text: |
      <h3>Steps and Banks</h3><p>A "step" refers to one set of sequence step controls. Eight steps are visible at all times, but Octagon can actually be set between 1 and 32 steps. Each step, in turn, can consist of between 1 and 8 gate or trigger "pulses." The important thing to remember is that <em><strong>each step has its own CV value (typically a musical note), but pulses within a step will all be the same CV value (note).</strong>&nbsp;</em></p><p>As a result,<strong> <em>individual clock pulses from Octagon's internal clock or external clock pulses correspond to the pulses within each sequencer step</em></strong> (not the entire step, like most typical sequencers). This may sound a little confusing, but we promise, it's easy to wrap your head around once you start using it.&nbsp;</p><p>Octagon can have up to 32 sequence steps with 8 steps viewable at any given time.&nbsp;</p><p><strong>Shift Bank Left/Right buttons</strong>- Shifts which sequence step sliders are currently visible in banks of 8. For example, if the <em>Sequence Length</em> is set at 16 steps, and steps 1-8 were currently visible, clicking the <em>Shift Bank Right</em> button would change the view to steps 9-16. The gold numbers beneath each step change to reflect this.&nbsp;</p><p><strong>Shift Step Left/Right buttons</strong>- Shifts which sequence step sliders are currently visible by one step. For example, if the Sequence Length is set at 16 steps, and steps 1-8 were currently visible, clicking the <em>Shift Bank Right </em>button would change the view to steps 2-9. The gold numbers beneath each step change to reflect this.&nbsp;</p><p><strong>Step Play Order button and display</strong>- Clicking the button or display opens a pop-up where step playback order can be changed. The step play order modes are as follows:</p><ul><li><em>Forward</em>- Starts at first enabled step and continues to last enabled step then loops. This is the default setting.&nbsp;</li><li><em>Reverse</em>- Starts at last enabled step and continues to first enabled step then loops.</li><li><em>For-Rev</em>- Moves forward until it reaches the last step number then
      reverses. When it reaches step 1, it plays forward.
      </li><li><em>For-Rev Repeat</em>- Same as <em>For-Rev</em> but plays the first and the
      last stage twice. This can help to keep sequences playing
      correctly in 4/4 time, for example.</li><li><em>Even Only</em>- Plays even steps only, in forward direction.&nbsp;</li><li><em>Odd Only</em>- Plays odd steps numbers only, in forward direction.
      </li><li><em>Funnel</em>- First, last and inward, e.g., if the sequence length is 8 steps, the order would be
      1,8,2,7,3,6,4,5, etc.</li><li><em>Hourglass</em>- Same as <em>Funnel</em> above, but once it reaches the "center," it works its way back
      out in reverse, ex: 1,8,2,7,3,6,4,5,5,4,6,3,7,2,8,1.</li><li><em>Random</em>- Starts at a random step and chooses steps randomly within the # of steps setting.
      </li><li><em>Brownian</em>- Advances in a pseudo-random pattern known as “drunken walk.” Starting at stage 1 it has a 50% chance of moving
      forward, 25% chance of staying at the same stage, and 25%
      chance of moving backwards. This results in a sequence that
      mostly moves forward with some degree of repetition. (Not to be confused with <em>James Brownian</em>, which only plays on step one, and fines you if you make a mistake.)</li></ul><p><strong>Order CV jack and associated Step Play Order modes</strong><br>The <em>Order CV</em> jack allows CV control of which steps are played when using the <em>Step Play Order</em> modes below. Since the&nbsp;<em>Order CV</em>&nbsp;jack only affects these modes, it appears "grayed out" for all other modes.&nbsp;&nbsp;</p><ul><li><em>CV Cont - Distributed</em>- The 0-5V CV "spread" is equally divided by the current <em>Sequence Length </em>setting. For example, If the sequence length was 8 steps, voltages from 0-0.625 would correspond to step 1, 0.626-1.25 would correspond to step 2, 1.26-1.875 would correspond to step 3, etc. Math is fun, eh?</li><li><em>CV Cont - 1V/oct</em>- Each stage corresponds to 1/12V divisions, allowing a
      keyboard or secondary sequencer CV to "play" the steps in a consistent fashion. Unlike&nbsp;<em>CV Cont - Distributed</em>&nbsp;mode,&nbsp; stage voltages are the same regardless of the <em>Sequence Length</em> setting.&nbsp;</li></ul>
  -
    type: image
    image:
      - /assets/ug_octagon_trans.jpg
    alignment: left
  -
    type: text
    text: '<h3>Transport Section</h3><p>The top area of the module uses standard tape deck-style transport controls.</p><p><strong>Stop button and CV jack</strong>- Stops sequencer from running. The <em>Stop</em>&nbsp;button can be activated via CV using the jack below the button with any trigger or gate CV greater than +2.5 volts.</p><p><strong>Start and CV jack</strong>- Starts sequencer running. The <em>Start</em>&nbsp;button can be activated via CV using the jack below the button with any trigger or gate CV greater than +2.5 volts.</p><p><strong>Step</strong>- Advances current position to the next step. This is useful for setting pitches for each stage when stopped. The advance button also works when the sequencer is in play mode. Note that we didn''t include a CV jack for step advance- the <em>Ext Clk</em>&nbsp;jack does exactly this, hence the fanciful arrow.&nbsp;</p>'
  -
    type: image
    image:
      - /assets/ug_octagon_topcontrols.jpg
    alignment: left
  -
    type: text
    text: |
      <h3>Rate, Gate, and More Top Controls</h3><p><strong>Ext Clk button and CV in</strong>- Clicking the&nbsp;<em>Ext</em>&nbsp;button disconnects Octagon's internal clock and accepts clock signals from&nbsp;<em>Ext Clk</em>&nbsp;jack. Octagon isn't too fussy about external clock sources; pretty much anything that creates rapid (or not-so-rapid) pulses can be used, including LFO's, oscillators, or even the gate or trigger output of another sequencer. Along these lines, note that external clock pulses don't have to consistently repeat either; any pattern of pulses can drive the sequencer&nbsp;<em>Ext Clk</em>&nbsp;input.</p><p><strong>Reset</strong>- This input jack is&nbsp;<strong>really</strong>&nbsp;important for locking sequencer timing to a DAW project or other sequencers. It force-resets the sequencer to the very beginning of step 1 the instant it receives a gate or trigger voltage.</p><p><strong>Offset CV</strong>- This input jack lets you add or subtract overall voltage from the sequencer's output. Most commonly this would be used to transpose the key of a sequence during playback (from a keyboard CV, or another synced sequencer running at a slower rate), but it can also be used for more esoteric applications, such as routing an LFO to continuously vary the pitch of the entire sequence.</p><p><strong>Rate knob+LED/CV jack and attenuator</strong>- The rate knob sets the internal clock speed from around 4 - 240 bpm. The LED indicator flashes with each "click" or step advance. The&nbsp;<em>Rate</em>&nbsp;pop-up tooltip is calibrated to display tempos based on sixteenth-notes. For example, setting the&nbsp;<em>Rate</em>&nbsp;knob to 120 bpm plays 480 notes a minute (We did this because you'll likely want to play fast tempos such as this, and it's sort of kooky to set the knob to 480 bpm to get sixteenth-notes). External clock signals can used if faster or slower speeds are needed - we won't judge! The CV In jack and attenuator allow CV control of tempo.&nbsp;</p><p><strong>Gate Time</strong>- Sets the length of the 5V gate signal from 1-1000ms for each pulse in a sequence step. The <em>Gate Time</em>&nbsp;setting is not affected by the overall sequencer rate. It also has no effect on the <em>Trig Out</em>&nbsp;jack signals (because a trigger signal is always a rapid pulse). The CV In jack and attenuator allow CV control of the gate length.&nbsp;</p><p><strong>Sequence Length and display</strong>- These up/down buttons set the total number of sequencer steps from 1-32 steps. This defaults to 8 steps and can be altered with the sequencer in stop or play mode. The <em>CV In</em> jack and attenuator allow CV control of the gate length.&nbsp;</p><p><em>Pro tip: Holding down the buttons continuously changes the setting, so you won't have to click the button a zillion times.&nbsp;</em></p><p><strong>Slide knob</strong>- The&nbsp;<em>Slide</em>&nbsp;control causes notes to slide from one pitch to the next, as opposed to discretely jumping from one pitch to the next. It works in conjunction with the individual <em>Slide</em> buttons in each step's controls - <strong>slide only occurs if the <em>Slide</em> button is enabled for that step.</strong>&nbsp;<br><br>Octagon's slide implementation is unique in that it features two types of slide; normal and "303" style. <br></p><ul><li><strong>Standard slide- </strong>Technically, this would be referred to as "constant time"<em> </em>slide, where the speed of the glide is fixed and higher settings = longer glide time. This is how the portamento or glide operates in most classic monophonic synthesizers. Depending on the overall <em>Rate</em> setting, note interval distance, and <em>Slide</em>
       knob setting, pitches may or may not fully "make it" up or down to the next 
      note in the time between steps.&nbsp;&nbsp;<br></li><li><strong>Constant Rate/303-Style slide-&nbsp;</strong>"Constant rate"<em>&nbsp;</em>slide emulates the famous little silver box o' techno heard around the world. It has a few unique idiosyncracies.<br><br>- Pitch changes from one step to the next&nbsp;<em>always</em>&nbsp;occurs within the time between the two steps, regardless of pitch interval or bpm setting. In other words, the pitch change will always "arrive" at the following pitch in the time between the steps regardless of whether it's a half-step or five octaves.&nbsp;<br>- When the <em>Slide/</em><em>Constant Rate</em>&nbsp;button is enabled, the last pulse of a slide enabled step&nbsp;is automatically set to legato- i.e. the gate is high from last pulse of the step until the beginning of the next sequence step, and the pitch slide happens during the last 16% of the step. (To frame that in little-silver-Japanese-technobox terms, each of its steps lasts 24 pulses, and the slide occurs during the last 4 pulses.)</li></ul><h3>Sequencer Step Controls</h3><p>Each step consists of a big fader for setting the step CV, along with a gaggle of buttons, many featuring fun cryptic abbreviations! (We attempted to keep Octagon's overall size manageable) Here we'll dissect one sequence step and run down what all the buttons do.&nbsp;</p>
  -
    type: image
    image:
      - /assets/ug_octagon_seqstep2.jpg
    alignment: left
  -
    type: text
    text: |
      <p><strong>CV Slider and LED</strong>- Sets the voltage sent to the main CV out for the step. The LED beneath indicates to show the current step is active.</p><p><strong>Pulses buttons</strong>- Each sequence step can have up to eight gate/trigger pulses.&nbsp; The sequence step counts vertically through the number of pulses for that step; the pulse buttons flash red at each pulse count.&nbsp;</p><p>The gate signals behave differently depending upon the current <em>Gate</em> mode selection. The <em>Pulses</em> buttons will illuminate differently dependent on
      the current <em>Gate</em> mode, and the gate pulse steps may or may not send a voltage depending on their setting, but Octagon will also count up to the highest selected pulse number before advancing to the next step.&nbsp;</p><p><strong>Gate mode-</strong>&nbsp;These buttons define the behavior of the gate voltages for the pulse steps.&nbsp;</p><ul><li><strong>Off</strong>- Doesn't output any gate CV's, but lingers on the step for the
      duration of the current <em>Pulses</em> setting. All buttons up to the
      selected # of "rest" pulses are lit and flash as it counts up. When it
      reaches the last selected pulse #, it advances to the next step.
      The # of counts is selected by clicking the top button only. This is essentially a rest with definable length.&nbsp;</li><li><strong>Single (Sngl)</strong>- Outputs a single gate on pulse #1 then counts up to
      whatever the # of pulses setting is. In this mode, pulse #1 is
      always on (hence always green); you only need to click the top button to select the # of pulse counts (how long it rests after the
      pulse on 1). When it reaches the last selected pulse #, it
      advances to the next step.<br></li><li><strong>Legato (Leg)</strong>- Outputs a continuous gate lasting as long as the # of
      pulses setting then advances to the next step. The # of counts is chosen by clicking the top button only.&nbsp;</li><li><strong>Repeat (Rept)</strong>- Outputs a separate gate on each active pulse #. When it
      reaches the last selected pulse #, it advances to the next step. The # of counts is chosen by clicking the top button only. If you're not hearing individual notes sound, make sure the <em>Gate Time </em>knob setting is short enough. If the gate output is patched to an envelope generator, make sure the decay and release times are short enough to hear individual notes.</li><li><strong>Defined (Def)</strong>- The overall pulse count AND which steps send gates can both be set in any combination. Consecutively selected steps send separate gates (i.e., no legato).&nbsp;<br><br>When the <em>Defined</em> button is clicked, a pop-up menu opens where you'll select the number of active pulses and the corresponding number of pulse buttons will illuminate in amber. Any combination of the active pulses can be clicked to turn on gates. Active gate steps will illuminate in green, and gray pulse buttons don't do anything. The number of active pulses can be changed at any time by clicking on the <em>Defined</em> button and changing the number of pulses.<br><br>In the image below, the step will count up to six and gates will be sent for steps 1, 2, and 5.</li></ul>
  -
    type: image
    image:
      - /assets/ug_octagon_defmode.jpg
    alignment: left
  -
    type: text
    text: '<p><strong>Skip-</strong>&nbsp;When a step''s skip button is on, Octagon jumps over it as it if wasn''t there (in contrast to the <em>Off </em>gate&nbsp;mode, where the selected number of pulses will count but no gate voltages are output).<br></p><p><strong>Slide-</strong>&nbsp;Adds a CV slide for the step - see <em>Slide knob</em> section for more info.</p><p><strong>Division-</strong>&nbsp;Sometimes referred to as "ratcheting," this adjusts the pulse rate for the step. By default, this is set to the standard /1 rate, but can also be set to /2, /3, or /4 to play pulses more quickly. The <em>Division</em> button acts globally for all pulses of a step. Note: The Division function is disabled when using an external clock source (because external clock pulses happen once per sequence pulse or step and can''t be "multiplied."</p>'
  -
    type: image
    image:
      - /assets/ug_octagon_outputsect.jpg
    alignment: left
  -
    type: text
    text: '<h3>Output Jacks and Other Right-Side Controls</h3><p><strong>Play Trig Out</strong>- The <em>Play Trigger Out</em>&nbsp;jack outputs a 5V trigger spike any time play mode is initiated (from the <em>Start</em>&nbsp;button or via CV control). This can be useful for starting ganged multiple sequencers and other functions.<br></p><p><strong>Clock Out</strong>- This outputs Octagon''s internal clock signal for syncing other modules. If <em>External Clock</em> mode is selected, it echoes the incoming clock, thus turning Octagon into the world''s most complex mult module.&nbsp;</p><p><strong>Trigger Out jack</strong>- Outputs 5V trigger signals for active pulses.</p><p><strong>Gate Out jack</strong>- Outputs 5V gate signals for active pulses.</p><p><strong>CV Range buttons</strong>- Selects the ranges of voltage for sliders.</p><ul><li><strong>1V = 0 to +1V</strong>&nbsp;(one-octave range)</li><li><strong>2V = 0 to +2V</strong>&nbsp;(two-octave range)</li><li><strong>5V = 0 to +5V</strong> (five-octave range)</li></ul><p>Since Voltage Modular''s pitch conforms to the 1V/octave standard, this means a 1V range equates to a range of one octave, a 2V range equates to two octaves, and a 5V range equates to five octaves. Octagon''s pop-up tooltip displays will change to reflect <em>CV Range</em>&nbsp;selection.</p><p><strong>Quantize</strong>- Enabling<em>&nbsp;Quantize</em>&nbsp;forces fader values to snap to 1/2 step note increments (i.e. 1/12 volt). Without this, it would be difficult to set note values to play in tune. Disabling <em>Output Quantize</em>&nbsp;turns off pitch "snap" and allows any value to be set - this is useful when the sequencer is being used to modulate non-pitched destinations, such as filter cutoff or amplitude. The pop-up tooltip displays will show note or decimal values dependent on the<em>&nbsp;Quantize</em>&nbsp;button setting.</p><p><strong>CV Out jack</strong>- Outputs the slider CV for the current step.</p><p><br></p><p><br><br><br><br></p>'
template: documentation
seo:
  description: 'Binary module module tests an incoming signal to determine if its voltage is positive or negative and outputs a selected voltage whenever the condition is true.'
  image: /assets/social-modules/binary.png
fieldset: documentation
id: 421aaa44-9728-4e00-8c46-32abaeea800c
