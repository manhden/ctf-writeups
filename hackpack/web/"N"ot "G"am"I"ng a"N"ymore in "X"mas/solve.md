## challenge

Can you login as admin? http://no-gaming-anymore-in-xmas.ctf2021.hackpack.club

## solve

I have a website

![website](./images/website.png)

I try login and intercept with burpsuite

![intercept](./images/intercept.png)

I change `debug = 1`, and repeat request

![debug 1](./images/debug1.png)

So, website have URI `maybehereimportantstuff`, i access to it. I got a flag.

![debug 1](./images/flag.png)

Flag is: `flag{ng1nx_m1sconf1g_c4n_b3_h4rmful}`
