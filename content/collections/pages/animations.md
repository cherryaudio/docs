title: Animations
body:
  -
    type: text
    text: '<h2>Animations</h2><p><strong>Java Class Name: </strong>&nbsp;VoltageImage</p><p><strong>Notable APIs:</strong></p><p><code>void Animate(boolean bLoop);</code><br>Starts your animation playing. Only necessary if you don’t have the “Auto Play” option checked.</p><p><code>void StartAnimation( AnimationMode animMode, boolean bLoopAnimation, int milsPerFrame, int startImage );</code><br>This also starts your animation playing.</p><p><code>void SetAnimateMode( AnimationMode animMode);</code><br>Sets the animation direction. Valid values for animMode are <code>Forward</code>, <code>Backward</code>, <code>ForwardAndBack</code>, and <code>BackAndForth</code>.</p><p><code>int &nbsp;GetNumberOfFrames();</code><br>Returns the number of frames (images) in your animation.</p><p><code>void SetCurrentFrame(int curFrame);</code><br>Sets the current foreground frame for the animation. curFrame is a zero-based index into the array of total frames in the animation.</p><p><code>void SetCurrentImage( String resourceName );</code><br>Also sets the current foreground frame, but takes a resource name instead of a frame index.</p><p><code>int &nbsp;GetCurrentFrame();</code><br>Returns the index of the current foreground frame.</p><p><code>void Clear();<br></code>Removes all frames from the animation.</p><p><code>void SetAnimationSpeed( int milsPerFrame, boolean bReset );</code><br>Sets the animation speed, in milliseconds per frame.</p><p><code>void AddNewImage( String resourceName );</code><br>Adds a new image to the animation.</p><p><code>void AddImageFromMemory( byte[] data );</code><br>&nbsp;Adds a new image to the animation from a memory buffer. The buffer should be the contents of an image file (PNG, JPG, etc.) rather than a table of pixels.</p>'
  -
    type: image
    image:
      - /assets/VMPG/image7.png
    alignment: left
  -
    type: text
    text: '<p><strong>Frame Rate:</strong> The rate at which the animation will animate. Note that this is in milliseconds/frame rather than the conventional frames per second.</p><p><strong>Auto Play:</strong> If checked, the animation will start playing as soon as your module gets instantiated. If not, you’ll have to start animation yourself by calling <code>StartAnimation()</code> or <code>Animate()</code>.</p><p><br></p>'
template: documentation
id: 39fee438-6099-4e22-a15a-a0f70796e71d
slug: animations
blueprint: documentation
