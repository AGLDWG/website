---
layout: page
title: Join
permalink: /join
---

<h1>Australian Government Linked Data Working Group</h1>
<h2>Join</h2>
<p>To join the Working Group, just sign up to the mailing lists. We'll then be in touch with specific meeting details and hope to see/hear you soon!</p>
<style>
    form.contact {
        display:grid; 
        grid-template-rows: 50px 50px 50px 100px 100px 20px; 
        grid-template-columns: 150px 300px;
    }
    p.note {
        font-size:smaller; font-style: italic;
    }
</style>
<div style="border: solid 1px rgb(133, 25, 2); padding: 0 30px 30px 30px;">
    <h4>Sign up to the mailing lists</h4>
    <form class="contact" action="https://formspree.io/mknjwrge" method="POST" >
        <div style="grid-row: 1; grid-column: 1;">
            <label for="given_name">Given Name:</label>
        </div>
        <div style="grid-row: 1; grid-column: 2;">
            <input type="text" name="given_name" />
        </div>
        <div style="grid-row: 2; grid-column: 1;">
            <label for="family_name">Family Name:</label>
        </div>
        <div style="grid-row: 2; grid-column: 2;">
            <input type="text" name="family_name" />
        </div>
        <div style="grid-row: 3; grid-column: 1;">
            <label for="email">Your email:</label>
        </div>
        <div style="grid-row: 3; grid-column: 2;">
            <input type="email" name="email" style="width: 250px;" />
        </div>
        <div style="grid-row: 4; grid-column: 1;">
            <label for="email">Your affiliation:</label>
        </div>
        <div style="grid-row: 4; grid-column: 2;">
            <input type="affiliation" name="affiliation" style="width: 250px;" />
            <p class="note">The government entity or company/NGO etc. you're part of. Can be 'none'!</p>
        </div>
        <div style="grid-row: 5; grid-column: 1;">
            <label for="how">How you got here:</label>
        </div>
        <div style="grid-row: 5; grid-column: 2;">
            <textarea type="how" name="how" style="width: 250px;"></textarea>
            <p class="note">How you heard about the AGLDWG and why you want to join its mailing list.</p>
        </div>
        <!--<input type="hidden" name="_next" value="join-thanks" />-->
        <div style="grid-row: 7; grid-column: 2;">
            <input type="submit" value="Sign up!">
        </div>
    </form>
</div>
<p></p>
