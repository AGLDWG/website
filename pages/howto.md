---
layout: page
title: How To
permalink: /howto
---

# Australian Government Linked Data Working Group

## How To

The AGLDWG can assist Australian governments with some Linked Data-related tasks - see [Assistance](assistance). Additionally, we have quite a few established ways of working that Linked Data users can follow to complete some straightforward Linked Data and Persistent Identifier-related tasks. Here are some.

### How to publish an ontology

#### Suitability

The AGLDWG is keen to assist government organisations publish Semantic Web/Linked Data ontologies for any purposes they see fit within the realm of government business.

Usually this will involve use of the `linked.data.gov.au` persistent identifier namespace that we support - see our [URI Guidelines](guidelines).

#### Examples

Here are some big and small ontologies developed by a range of people that core Working Group members have assisted the publication of:

- [Australian Biodiversity Information
  Standard](https://linked.data.gov.au/def/abis)
  - a large national standard ontology for the exchange of biodiversity information in Australia
- [The SMURF Ontology](https://linked.data.gov.au/def/smurf)
  - a smaller ontology very recently (late 2025) developed by [RMIT
    University](https://www.rmit.edu.au/) to assist with the linking of existing spatial data ontologies together
  - published in early 2026
- [The Australian Government Records Interoperability Framework (AGRIF)
  ontology](https://linked.data.gov.au/def/agrif)
  - a middle-sized ontology published by the Department of Finance originally in 2017 for whole-of-government record keeping

These ontologies were created in very different ways and are delivered online using different systems, but they did share common steps in getting to publication that the AGLDWG assisted with which are listed below.

#### Process

We suggest this general process if you wish to publish an ontology to be used for Australian Government data:

1.  **Design**: make your ontology
    - You will have to design this yourself! We can assist with recommending textbooks, people and tools, just ask
    - We recommend using a desktop ontology builder tool to perform your modelling, such as [Protégé](https://protege.stanford.edu/). It will produce an ontology document in an RDF document
    - At this stage, you could use any made-up namespaces for new ontology elements, perhaps `http://example.com/` which is a well-known testing IRI.
2.  **Identify**: arrange a suitable IRI namespace
    - The AGLDWG supports the use of `linked.data.gov.au` for the
      creation of long-term persistent ontology identifiers and
      namespaces.
    - Ontologies are likely to be created within the `def/` register of `linked.data.gov.au`
    - You will need a sensible identifier part for your ontology within `def/`. For the above, examples, all three use acronyms, for example the PID for *Australian Biodiversity Information Standard* is [`https://linked.data.gov.au/def/abis`](https://linked.data.gov.au/def/abis) but you may choose other methods to create a PID
    - See our [URI Guidelines](guidelines) for all the particulars.
    - The WG will assist with all parts of this.
3.  **Present**: make human-readable forms
    - An ontology must, at least, be delivered in an RDF file (in rdf/xml, text/turtle or another RDF format). However, it is good practice and a requirement of the AGLDWG to also provide a human-readable version of the ontology to document it, usually a web page (HTML).
    - The latter can be generated from ontology files using a range of tools such as [LODE](http://www.essepuntato.it/lode) or [pyLODE](https://tools.kurrawong.ai/pylode). It may also be delivered live, our of a Linked Data documentation application.
    - The AGRIF and SMURF examples above used pyLODE to make static HTML 
    - We suggest including a diagram of the ontology's main classes and  relationships. These may have to be prepared separately as tools  like pyLODE won't make them it automatically, but they really help  with ontology understanding.
    - Tools like [WebVOWL](https://github.com/VisualDataWeb/WebVOWL) can  automatically make ontology diagrams, but (some of us at least!) think that hand-made ontology diagrams are best.
    - See ABIS' many diagrams in the examples above
4.  **Deliver**: put online
    - Once a human-readable form of the ontology has been made, it will need to be delivered online so it can be read.
      - The SMURF ontology above used pyLODE to generate an HTML file and then hosted it and the RDF file in GitHub at <https://github.com/rmit-gkl/SMURF/>, delivering the web page at<https://rmit-gkl.github.io/SMURF/smurf.html>
      - ABIS above uses a powerful documentation system called[ASCIIDoctor](https://asciidoctor.org/) to generate web pages from text files and images, i.e. not automatically from ontology source data. But it is also delivered online as a web page using GitHub Pages: [AusBIGG's ABIS respository](https://github.com/AusBIGG/abis/).
    - The AGLDWG can host simple ontologies easily for you in our GitHub account. We host the AGRIF example above.
